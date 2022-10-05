@extends('layouts.layout')

@section('content')

@include('inc.css')
<?php 
$receiver = DB::table('chat')->where('tradecode', $_GET['id'])->value('reciever_userid');
$receiver_details = DB::table('users')->where('id', $receiver)->first();
$all_chats = DB::table('chat')->where('tradecode', $_GET['id'])->get();

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

					<div class="container">
					<div class="row clearfix">
						<div class="col-lg-12">
							<div class="card chat-app">
								@include('inc.others')

								<div class="chat">
									<div class="chat-header clearfix">
										<div class="row">
											<div class="col-lg-6">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
													<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
												</a>
												<div class="chat-about">
													<h6 class="m-b-0">{{ $receiver_details->name }}</h6>
													<small><p class="text-success">is online</p></small>
												</div>
											</div>
											
										</div>
									</div>
									<div class="chat-history">
										<ul class="m-b-0">
                                         @foreach ($all_chats as $s_chat)
										
										@if ($s_chat->sender_userid == Auth::user()->id)
								      	{{-- move chat right  --}}
										  <li class="clearfix">
											<div class="message-data text-right">
												<span class="message-data-time">{{ \Carbon\Carbon::parse($s_chat->timestamp)->diffForHumans() }}</span>

											</div>
											<div class="message other-message float-right"> {{ $s_chat->message }} </div>
										</li>

										@endif
										@if ($s_chat->reciever_userid == Auth::user()->id)
                                        
											<li class="clearfix">
												<div class="message-data text-left">
													<span class="message-data-time">10:12 AM, Today</span>
												</div>
												<div class="message my-message float-left">Are we meeting today?</div>                                    
											</li> 

										@endif
										
										 
									

										 @endforeach
											


                              
											
										</ul>
									</div>
									<div class="chat-message clearfix">
										<div class="input-group mb-0">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-send"></i></span>
											</div>
											<input type="text" class="form-control" placeholder="Enter text here...">                                    
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
