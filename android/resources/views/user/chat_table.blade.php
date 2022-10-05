@extends('layouts.layout')

@section('content')

<?php

$chats = DB::table('chat')->where('sender_userid', Auth::user()->id)->get();


?>
								<div class="row row-deck">
									<div class="col-xl-12 col-md-12 col-lg-12">
										<div class="card overflow-hidden scrowlable">
											<div class="card-header">
												<h3 class="card-title">My Chats Inbox  </h3>
												
											
											</div>
											<div class="card-body p-0">
												<div class="table-responsive mb-0">
													<table class="table text-nowrap card-table table-vcenter text-nowrap border-top mb-0">
														<tbody>
														    @foreach($chats as $chat)
															<tr>
																<td>
																	<div class="media mt-0 mb-0">
																	
																		<div class="media-body">
																			<div class="card-item-desc ml-4 p-0 mt-2">
																				<a class="text-dark" href="#">
																				<h4 class="font-weight-normal fs-14 mb-1">
                                                                                    <?php
														                       $users=App\Models\User::where('id',$chat->reciever_userid)->get();
																				
																				foreach($users as $user){

																				    $name=$user->name;
																				    $verified=$user->verified;

																			        }
																				echo $name;
																				
																			        	?></h4>
																				
																				</a> 
																				
																			    <br>

																			
																			</div>
																		</div>
																	</div>
																</td>
																<td>
                                                                    Last seen:
                                                                    @if($user->last_seen != null)
                                                                         <p style="color: green;">is online</p>
                                                                        
                                                                    @else
                                                                        A while back
                                                                    @endif
																	
																</td>
																<td>
																
																<a href="/chatting?id={{ $chat->tradecode }}" class="btn btn-success">open chat</a>
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