<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHeaderNavigationRequest;
use App\Http\Resources\HeaderNavigation\HeaderNavigationCollection;
use App\Models\HeaderNav;
use App\Repositories\HeaderNavigation\HeaderNavigationRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HeaderNavController extends Controller
{

    /**
     * @var HeaderNavigationRepositoryInterface
     */
    private $headerNavigationRepository;

    /**
     * HeaderNavController constructor.
     *
     * @param HeaderNavigationRepositoryInterface $headerNavigationRepository
     */
    public function __construct(HeaderNavigationRepositoryInterface $headerNavigationRepository)
    {
        $this->headerNavigationRepository = $headerNavigationRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return HeaderNav[]|Collection|JsonResponse|Response
     */
    public function index()
    {
        return response()->json(new HeaderNavigationCollection($this->headerNavigationRepository->getHeaderNavigations()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return HeaderNav
     */
    public function store(StoreHeaderNavigationRequest $request)
    {
        $data = $request->all();

        $headerNav = new HeaderNav();
        $headerNav->name = $data['name'];
        $headerNav->link_url = $data['link_url'];
        $headerNav->show = $data['show'];
        $headerNav->edit = $data['edit'];
        $headerNav->delete = $data['delete'];
        $headerNav->save();

        return $headerNav;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return HeaderNav[]|Collection|JsonResponse|Response
     */
    public function parentItems()
    {
        return HeaderNav::where('is_dropdown', false)->pluck('name', 'id');
    }
}
