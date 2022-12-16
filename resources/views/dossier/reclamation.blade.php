@extends ('layouts.master')

@section('content')

<section style="background-color: #f8f9fd">
    <div class="d-flex align-items-center justify-content-center  h-100 ">
<div class="container">

    <div class="row d-flex align-items-center justify-content-center">
        
        <div class="col-md-9 col-lg-7">
            
            <div class="row d-flex justify-content-center ">
                                <div class="col-md-5 col-lg-4  text-white" style="background-color: #1cb64a;">
                    <h3>Reclamation</h3>
                    <p>tu px rediger une reclamation maintenent</p>
                        <div class="dbox w-100">
                            <div class="icon ">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="text">
                                <p> <span> Adress:</span> " hay riad rabat"</p>
                            </div>
        
                        </div>
        
                        <div class="dbox w-100">
                            <div class="icon ">
                                <span class="fa fa-phone-marker"></span>
                            </div>
                            <div class="text">
                                <p> <span> Phone:</span> " 0537000000"</p>
                            </div>
        
                        </div>
        
                        <div class="dbox w-100">
                            <div class="icon ">
                                <span class="fa fa-mail-marker"></span>
                            </div>
                            <div class="text">
                                <p> <span> Email:</span> " Mutuelle@gmail.com"</p>
                            </div>
        
                        </div>

                        
                
                
                </div>
                <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch" style="background-color: #ffffff">

                        <div class="wraper">

                            <form action="{{ url('reclamation') }}" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="" >Email</label>
                                            <input id='email' name='email' placeholder="Email" type="text" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="col-md-6"><div class="form-group mb-4">
                                            <label for="">CIN</label>
                                            <input id='cin' name='cin' placeholder="CIN" type="text" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="col-md-12"><div class="form-group mb-4">
                                        <label for="">Sujet</label>
                                        <input id='sujet' name='sujet' placeholder="Sujet" type="text"  class="form-control" >
                                    </div></div>

                                  

                                    <div class="col-md-12"><div class="form-group mb-4">
                                        <label for="" class="contactForm">text</label>
                                         <textarea id='text' name='text' placeholder="Text" class="form-control"   rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12"><div class="form-group mb-4">
                                    
                                    <input type="submit" value="Send Message" class="btn btn-success" >
                                     
                                </div>
                            </div>

                                   
                                </div>
                                </div>


                            </form>




                        </div>
                </div>
            </div>
            </div>


        </div>
        </div>


        
</div>
</section>





@endsection