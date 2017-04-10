@extends('layouts.app')

@section('content')
<div id="alerts-container">

    </div>


    <main>

        <div class="container-fluid">

           <div id="home-container">
             <div class="home-inner-container">
                 <h1>Welcome</h1>
                 <h1>{{ Auth::user()->name }}</h1>
                <p>Application is under construtions and we'll back soon.</p>
             </div>
          </div>
       </div>


    </main>
@endsection
