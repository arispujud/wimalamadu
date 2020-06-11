<?php

namespace Modules\Wimalamadu\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class WimalamaduController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $info = [
            'title' => 'Wimala Madu',
            'description' => 'Kami menjual 100% madu murni dengan nektar randu',
            'phone' => '082323235903',
            'email' => 'ridwanirfandhi@gmail.com',
            'address' => 'Karanganyar',
        ];
        
        $socialMedia = [
            'instagram' => 'wimala.madu',
            'whatsapp' => '6282323235903'
        ];

        $testimonials = [
            [
                'name' => 'ARIS PUJUD KURNIAWAN, S.T., M.T.',
                'message' => 'Saya selalu mengkonsumsi Wimala Madu setiap hari untuk membantu menjaga kesehatan dan imunitas tubuh. Sehingga badan tetap FIT dan dapat bekerja dengan maksimal.'
            ],
            [
                'name' => 'YUSUF MAULANA',
                'message' => 'Sangat efektif dalam membantu meredakan flu dan batuk. Serta meningkatkan nafsu makan saya.'
            ],
        ];
        $content = [
            'testimonials' => $testimonials
        ];

        $data = [
            'info' => $info,
            'social_media' => $socialMedia,
            'content' => $content,
        ];
        return view('wimalamadu::index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('wimalamadu::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('wimalamadu::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('wimalamadu::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
