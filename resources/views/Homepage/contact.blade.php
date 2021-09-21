@extends('layout.layout2')
@section('title', 'ContactUS index')
@section('my content')

<div class="container" style="margin-top: 50px; margin-bottom: 50px">

    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
            <div id="form-message-success" class="mb-4">Your message was sent, thank you!</div>
        </div>
    @endif

    <div class="row no-gutters">
        <div class="col-md-7">
            <div class="contact-wrap w-100 p-md-5 p-4">
                <h2 class="mb-4" style="color: #e43c5c">Contact Us</h2>
                <div id="form-message-warning" class="mb-4"></div>                 
                <form  method="post" action="{{ url('contactus') }}" enctype="multipart/form-data">

                    @csrf
                
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" placeholder="Enter your name">
                
                        <!-- Error -->
                        @if ($errors->has('name'))
                        <div class="error">
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                    </div>
                
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="Enter your email">
                
                        @if ($errors->has('email'))
                        <div class="error">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" placeholder="Enter your phone number">
                
                        @if ($errors->has('phone'))
                        <div class="error">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>
                
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                            id="subject" placeholder="Enter contact subject">
                
                        @if ($errors->has('subject'))
                        <div class="error">
                            {{ $errors->first('subject') }}
                        </div>
                        @endif
                    </div>
                
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                            rows="4" style="resize: none;" placeholder="Enter your message"></textarea>
                
                        @if ($errors->has('message'))
                        <div class="error">
                            {{ $errors->first('message') }}
                        </div>
                        @endif
                    </div>
                
                    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                </form>
            </div>
        </div>

        <div class="col-md-5" style="margin-top: 50px">
            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1959.7531782117642!2d106.7056816!3d10.7724763!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f43ff5d2f9d%3A0x4995ca9d8b9b5db2!2zMiBOZ3V5w6rMg24gSHXDqsyjLCBC4bq_biBOZ2jDqSwgUXXhuq1uIDEsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaA!5e0!3m2!1sen!2s!4v1632222631814!5m2!1sen!2s" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

    
    </div>
</div>
                     
@endsection
