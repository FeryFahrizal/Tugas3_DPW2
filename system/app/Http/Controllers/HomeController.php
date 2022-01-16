<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showhome(){
        return view('FrontView.home');
    }

    function showindex(){
        return view('FrontView.index');
    }

    function showabout(){
        return view('FrontView.about');
    }

    function showcontact(){
        return view('FrontView.contact');
    }

    function showproduct(){
        return view('FrontView.product');
    }

    function showtestimonial(){
        return view('FrontView.testimonial');
    }

    function showdashboard(){
        return view('BackView.dashboard');
    }

    function showkategori(){
        return view('BackView.kategori');
    }

    function showservices(){
        return view('FrontView.services');
    }

    function showsupplier(){
        return view('BackView.supplier');
    }

    function showcolegan(){
        return view('BackView.colegan');
    }

    function showproduct2(){
        return view('BackView.product2');
    }

    function showpromo(){
        return view('BackView.promo');
    }
}