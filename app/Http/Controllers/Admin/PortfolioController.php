<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Portfolio;
use App\Models\Category;

use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::all();

        return view("admin.portfolios.index", compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();

        return view("admin.portfolios.create", compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioRequest $request)
    {
        $validated = $request->validated();

        $new_portfolio = new Portfolio();
        $new_portfolio->fill($validated);
        $new_portfolio->save();

        return redirect()->route("admin.portfolios.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        return view("admin.portfolios.show", compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        return view("admin.portfolios.edit", compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        $validated_data = $request->validated();

        $portfolio->fill($validated_data);
        $portfolio->update();

        // ddd($data);

        return redirect()->route("admin.portfolios.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()->route("admin.portfolios.index");
    }
}
