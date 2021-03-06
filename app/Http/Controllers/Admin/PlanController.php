<?php

namespace App\Http\Controllers\Admin;

use App\Models\Plan;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePlan;

class PlanController extends Controller
{
    protected $repository;

    public function __construct(Plan $plan)
    {
        $this->repository = $plan;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = $this->repository->paginate();
        return view('admin.pages.plans.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.plans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdatePlan $request)
    {


        $this->repository->create($request->all());

        return redirect()->route('plans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $plan = $this->repository->where('url',$url)->first();
        return view('admin.pages.plans.show', compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($url)
    {
        $plan = $this->repository->where('url',$url)->first();


        return view('admin.pages.plans.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdatePlan $request, $url)
    {
        $plan = $this->repository->where('url',$url)->first();

        if(!$plan)
            return redirect()->back();

        $plan->update($request->all());

        return view('admin.pages.plans.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = $this->repository
                     ->with('details')
                     ->find($id);
        if (!$plan)
            return redirect()->back();

        if($plan->details->count() > 0){
            return redirect()->route('plans.index');
                            //  ->with('error', 'Plano cont??m detlahs, n??o ?? poss??vel excliuir! Exclua primeiro todos os detalhes');
        }

        $plan->delete();

        return redirect()->route('plans.index');
    }
}
