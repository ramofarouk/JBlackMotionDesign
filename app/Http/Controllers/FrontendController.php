<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
  public function index(Request $request)
  {
      return view('index');
  }
  public function contact(Request $request)
  {
      return view('pages.contact');
  }
  public function quiSommesNous(Request $request)
  {
      return view('pages.about');
  }
  public function services(Request $request)
  {
      return view('pages.services');
  }
  public function servicesCA(Request $request)
  {
      return view('pages.services.creation_applications');
  }
  public function servicesCG(Request $request)
  {
      return view('pages.services.creation_graphique');
  }
  public function servicesFM(Request $request)
  {
      return view('pages.services.fourniture_materiels');
  }
  public function realisations(Request $request)
  {
      return view('pages.realisations');
  }
}
