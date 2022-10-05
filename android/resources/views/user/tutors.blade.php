@extends('layouts.layout')

@section('content')

<?php

$tutors = DB::table('users')->where('type', 'tutor')->get();

?>
								<div class="row row-deck">
									<div class="col-xl-12 col-md-12 col-lg-12">
										<div class="card overflow-hidden scrowlable">
											<div class="card-header">
												<h3 class="card-title">Tutors Available Online   <button type="button" class="btn btn-secondary float-right" data-toggle="tooltip" data-placement="bottom" title="This Are Tutors available online you can book a class or make a chat with them">
                                               Learn
                                                 </button></h3>
												
											
											</div>
											<div class="card-body p-0">
												<div class="table-responsive mb-0">
													<table class="table text-nowrap card-table table-vcenter text-nowrap border-top mb-0">
														<tbody>
														    @foreach($tutors as $tutor)
															<tr>
																<td>
																	<div class="media mt-0 mb-0">
																	
																		<div class="media-body">
																			<div class="card-item-desc ml-4 p-0 mt-2">
																				<a class="text-dark" href="#">
																				<h4 class="font-weight-normal fs-14 mb-1">
                                                                                    <?php
																				$users=App\Models\User::where('id',$tutor->id)->get();
																				
																				foreach($users as $user){
																				    $name=$user->name;
																				    $verified=$user->verified;
																				  
																			          	}
																				echo $name;
																				
																			        	?></h4>
																				
																				</a> 
																				
																			
																				<span class="rated-products-ratings"> 
																				@if($verified==1)
																				<i class="fa fa-star text-warning"></i> 
																				<i class="fa fa-star text-warning"></i> 
																				<i class="fa fa-star text-warning"></i> 
																				<i class="fa fa-star text-warning"></i> 
																				<i class="fa fa-star text-warning"></i>
																				@endif
																				@if($verified==0)
																				<i class="fa fa-star text-warning"></i> 
																				<i class="fa fa-star text-warning"></i> 
																				
																				
																				@endif
																				
																				</i> </span>
																			    <br>
																				Last seen:
																				@if($user->last_seen != null)
																				
                                                                                    {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                                                                                @else
                                                                                    A while back
                                                                                @endif
																			
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<h4 class="font-weight-normal mb-0 fs-18 mt-1">Chatting</h4>
																	<p class="text-muted mb-0">Discuss Classess </p>
																<h4 class="font-weight-normal mb-0 fs-18 mt-1">create Chat</h4>
																<form method="post" action="/initializechat">
																	@csrf
																	<input name="sender_userid" value="{{ Auth::user()->id }}" type="hidden">
																	<input name="reciever_userid" value="{{ $tutor->id }}" type="hidden">
																	<p class="text-muted mb-0">
																		<button type="submit" class="btn btn-info">Chat</button>
																	</p>
																</form>
																	
																	
																</td>
																<td>
																    	<h4 class="font-weight-normal mb-0 fs-18 mt-1">Booking </h4>
																	<p class="text-muted mb-0">Class Booking</p>
																
																<a href="offer/" class="btn btn-success">Book Now</a>
																</td>
															
															</tr>
															@endforeach
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								
								</div>
								
								@endsection