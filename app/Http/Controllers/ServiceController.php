<?php

namespace App\Http\Controllers;

use App\Events\BookingMadeEvent;
use App\Events\BookingReadyEvent;
use App\Http\Requests\CreateServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Mail\BookingReadyMail;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        if($user->hasRole('admin')){
            $services = Service::orderByRaw("FIELD(status, 'pending', 'ready', 'completed')")->paginate(10);
        }
        else{
            $services = Service::where('user_id', $user->id)
            ->orderByRaw("FIELD(status, 'pending', 'ready', 'completed')")
            ->paginate(10);
        }

        return view('services.index',compact('services'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateServiceRequest $request)
    { 
        $user = Auth::user();
        $service = $request->validated();
        $service=Service::create([
            'vehicle_name'=>$request->vehicle_name,
            'service_type'=>$request->service_type,
            'service_date'=>$request->selected_date,
            'user_id'=>$user->id,
            'status'=>'pending',
        ]);
        event(new BookingMadeEvent($service));
        
        return redirect()->route('service.index')->with('success','Service created successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $request->validated();
    $user = User::findorfail($service->user_id);
    if($request->status=='ready'){
    event(new BookingReadyEvent($user,$service));
    }

    // Update the service data
    $service->vehicle_name = $request->input('vehicle_name');
    $service->service_type = $request->input('service_type');
    $service->service_date = $request->input('selected_date');
    $service->status = $request->input('status'); 

    // Save the updated service data
    $service->save();

    return redirect()->route('service.index')->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('service.index')
            ->with('success', 'Service has been deleted successfully');
    }
}
