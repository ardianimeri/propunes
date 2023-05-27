@extends('Aplikimet.layout')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <span class="text-warning"><b>PRO</b></span>PUNES</a>
        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#about">About</a>
                </li>
                <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#jobs">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#login">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="row">
    <div class="col-lg-12 margin-tb" style="display: flex; justify-content: space-between; margin-top: 10%; " >
        <div class="pull-left">
            <h2>Aplikimet</h2>
        </div>
    </div>
</div>

<div class="row" id="rows">
    <div class="col-2">
       <div class="form-floating">
           <select id="select1" class="form-select">
               <option selected disabled >Lokacioni</option>
               <option>Prishtine</option>
               <option>Mitrovice</option>
               <option>Prizeren</option>
               <option>Peje</option>
               <option>Ferizaj</option>
               <option>Gjilan</option>
               <option>Gjakove</option>
           </select>
       </div>
    </div>
    <div class="col-2">
     <div class="form-floating">
         <select id="select1" class="form-select">
             <option selected disabled >Orari</option>
             <option>Full-Time</option>
             <option>Part-Time</option>
         </select>
     </div>
  </div>
  <div class="col-2">
   <div class="form-floating">
       <select id="select1" class="form-select">
           <option selected disabled >Pozita</option>
           <option>Mitrovice</option>
           <option>Prizeren</option>
           <option>Peje</option>
           <option>Ferizaj</option>
           <option>Gjilan</option>
           <option>Gjakove</option>
       </select>
   </div>
</div>
<div class="col-2">
 <div class="form-floating">
     <select id="select1" class="form-select">
         <option selected disabled >Paga</option>
         <option>Mitrovice</option>
         <option>Prizeren</option>
         <option>Peje</option>
         <option>Ferizaj</option>
         <option>Gjilan</option>
         <option>Gjakove</option>
     </select>
 </div>
</div>
<div class="col-2">
<div class="form-floating">
   <select id="select1" class="form-select">
       <option selected disabled >Data</option>
       <option>Mitrovice</option>
       <option>Prizeren</option>
       <option>Peje</option>
       <option>Ferizaj</option>
       <option>Gjilan</option>
       <option>Gjakove</option>
   </select>
 </div>
</div>
 <div class="col-2">
   <div class="form-floating">
     <input id="search" type="text" class="form-control" placeholder="Search">
   </div>        
 </div>
</div>
<div class="container-text-center">
    <div class="roww">
      <div class="col">
        
      </div>
      </div>
      </div>
      @foreach ($aplikimet as $aplikimi)
          
      
  <div class="container-text-center" style="border: solid 1px black; margin: 5px" >
     <div class="roww">
        <div class="col">
            <a href="{{url('/Aplikimet/show')}}">{{ $aplikimi->Titulli }}</a>
            <h4>{{ $aplikimi->Lokacioni }}</h4 >

        </div>
      </div>
    </div>
    @endforeach









@endsection