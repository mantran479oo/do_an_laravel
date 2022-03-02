<?php /** @noinspection ALL */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AddProductRequest;
use App\Services\Admin\OrderServices;
use App\Services\Admin\ProductServices;
use App\Services\Admin\UserServices;

class ProductController extends Controller
{
    /**
     * @var ProductServices
     */
    private $productServices;

    /**
     * @var UserServices
     */
    private $userServices;

    /**
     * @var OrderServices
     */
    private $orderServices;

    public function __construct
    (
        ProductServices $productServices,
        OrderServices $orderServices,
        UserServices $userServices
    )
    {
        $this->productServices = $productServices;
        $this->orderServices = $orderServices;
        $this->userServices = $userServices;
    }

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
     * @param AddProductRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddProductRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->productServices->setProduct($request);
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
