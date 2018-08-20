<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getSermon() {
        return view('pages.sermon');
    }

    public function getEvent() {
        return view('pages.event');
    }

    public function getMedia() {
        return view('pages.media');
    }

    public function getBlog() {
        return view('pages.blog');
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function getDonate() {
        return view('pages.donate');
    }


    public function getMinistries() {
        return view('pages.ministry');
    }


    public function getDepartment() {
        return view('pages.departments');
    }


    public function getStaff() {
        return view('pages.our_staff');
    }

    public function getNewHere() {
        return view('pages.new_here');
    }


    public function getBlogPost() {
        return view('pages.blog_post');
    }

    public function getSermonList() {
        return view('pages.sermon_list');
    }

    public function getSingleSermon() {
        return view('pages.single_sermon');
    }

    public function getSingleEvent() {
        return view('pages.single_event');
    }



}
