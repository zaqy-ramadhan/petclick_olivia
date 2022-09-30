<?php

namespace App\Http\Controllers;

use App\Models\Payment_category;
use App\Http\Requests\StorePayment_categoryRequest;
use App\Http\Requests\UpdatePayment_categoryRequest;

class PaymentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePayment_categoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayment_categoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment_category  $payment_category
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_category $payment_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment_category  $payment_category
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_category $payment_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayment_categoryRequest  $request
     * @param  \App\Models\Payment_category  $payment_category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayment_categoryRequest $request, Payment_category $payment_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment_category  $payment_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment_category $payment_category)
    {
        //
    }
}
