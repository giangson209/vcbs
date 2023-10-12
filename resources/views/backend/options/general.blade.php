@extends('backend.layouts.app')
@section('controller','Cấu hình chung')
@section('action','Cập nhật')
@section('controller_route', route('backend.options.general'))
@section('content')
	<div class="content">
        <div class="clearfix"></div>
		@include('flash::message')
		<form action="{{ route('backend.options.general.post') }}" method="POST">
			@csrf
				<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin chung</a>
					</li>
					<li class="">
						<a href="#activity4" data-toggle="tab" aria-expanded="true">Header</a>
					</li>
					<li class="">
						<a href="#activity6" data-toggle="tab" aria-expanded="true">Banner - Ưu đãi</a>
					</li>
					<li class="">
						<a href="#activity7" data-toggle="tab" aria-expanded="true">Hình thức</a>
					</li>
					<li class="">
						<a href="#activity8" data-toggle="tab" aria-expanded="true">Hướng dẫn 1</a>
					</li>
					<li class="">
						<a href="#activity9" data-toggle="tab" aria-expanded="true">Hướng dẫn 2</a>
					</li>
					<li class="">
						<a href="#activity5" data-toggle="tab" aria-expanded="true">Footer</a>
					</li>
					<li class="">
						<a href="#activity3" data-toggle="tab" aria-expanded="true">Footer - Mạng xã hội</a>
					</li>
					<li class="">
						<a href="#activity2" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane " id="activity9">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="">Tiêu đề</label>
									<textarea type="text" class="form-control content" rows="4" name="content[title_hd_2]">{{ @$content->title_hd_2 }}</textarea>
								</div>
							</div>
							<div class="col-sm-22">
								<div class="repeater" id="repeater">
									<table class="table table-bordered table-hover">
										<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th>Hình ảnh</th>
												<th>Mô tả</th>
												<th></th>
											</tr>
										</thead>
										<tbody id="sortable">
											@if (!empty($content->hd2))
												@foreach ($content->hd2 as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-hd2')
												@endforeach
											@endif
										</tbody>
									</table>
									<div class="text-right">
										<button class="btn btn-primary" 
											onclick="repeater(event,this,'{{ route('get.layout') }}','.hd2', 'hd2')">Thêm
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane " id="activity8">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="">Tiêu đề</label>
									<textarea type="text" class="form-control content" rows="4" name="content[title_hd_1]">{{ @$content->title_hd_1 }}</textarea>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="repeater" id="repeater">
									<table class="table table-bordered table-hover">
										<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th>Hình ảnh</th>
												<th>Mô tả</th>
												<th></th>
											</tr>
										</thead>
										<tbody id="sortable">
											@if (!empty($content->hd1))
												@foreach ($content->hd1 as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-hd1')
												@endforeach
											@endif
										</tbody>
									</table>
									<div class="text-right">
										<button class="btn btn-primary" 
											onclick="repeater(event,this,'{{ route('get.layout') }}','.hd1', 'hd1')">Thêm
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane " id="activity7">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="">Tiêu đề</label>
									<textarea type="text" class="form-control" rows="4" name="content[title_ht]">{{ @$content->title_ht }}</textarea>
								</div>
								<div class="form-group">
									<label for="">Mô tả</label>
									<input type="text" class="form-control" name="content[desc_ht]" value="{{ @$content->desc_ht }}">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="">Tiêu đề hình thức 1</label>
									<input type="text" class="form-control" name="content[title_ht_1]" value="{{ @$content->title_ht_1}}">
								</div>
								<div class="form-group">
									<label for="">Loại hình thức 1</label>
									<input type="text" class="form-control" name="content[loai_ht_1]" value="{{ @$content->loai_ht_1}}">
								</div>
								<div class="form-group">
									<label for="">Nút ưu đãi 1</label>
									<input type="text" class="form-control" name="content[nut_ht_1]" value="{{ @$content->nut_ht_1}}">
								</div>
								<div class="form-group">
									<label for="">Link ưu đãi 1</label>
									<input type="text" class="form-control" name="content[link_ht_1]" value="{{ @$content->link_ht_1}}">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="">Tiêu đề hình thức 2</label>
									<input type="text" class="form-control" name="content[title_ht_2]" value="{{ @$content->title_ht_2}}">
								</div>
								<div class="form-group">
									<label for="">Loại hình thức 2</label>
									<input type="text" class="form-control" name="content[loai_ht_2]" value="{{ @$content->loai_ht_2}}">
								</div>
								<div class="form-group">
									<label for="">Nút ưu đãi 2</label>
									<input type="text" class="form-control" name="content[nut_ht_2]" value="{{ @$content->nut_ht_2}}">
								</div>
								<div class="form-group">
									<label for="">Link ưu đãi 2</label>
									<input type="text" class="form-control" name="content[link_ht_2]" value="{{ @$content->link_ht_2}}">
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane " id="activity6">
						<div class="row">
							<div class="col-lg-2">
								<div class="form-group">
									<label>Banner</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->banner) ? $content->banner :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->banner }}" name="content[banner]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="">Tiêu đề banner</label>
									<input type="text" class="form-control" name="content[title_banner]" value="{{ @$content->title_banner }}">
								</div>
								<div class="form-group">
									<label for="">Link banner</label>
									<input type="text" class="form-control" name="content[link_banner]" value="{{ @$content->link_banner }}">
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<label for="">Tiêu đề</label>
									<input type="text" class="form-control" name="content[title_intro]" value="{{ @$content->title_intro }}">
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<label for="">Giới thiệu</label>
									<textarea type="text" class="form-control" rows="4" name="content[desc_intro]">{{ @$content->desc_intro }}</textarea>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<label for="">Tiêu đề ưu đãi 1</label>
									<textarea type="text" class="form-control content" name="content[title_ud_1]">{{ @$content->title_ud_1}}</textarea>
								</div>
								<div class="form-group">
									<label>Ảnh ưu đãi 1</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->banner_ud_1) ? $content->banner_ud_1 :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->banner_ud_1 }}" name="content[banner_ud_1]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<label for="">Tiêu đề ưu đãi 2</label>
									<textarea type="text" class="form-control content" name="content[title_ud_2]">{{ @$content->title_ud_2}}</textarea>
								</div>
								<div class="form-group">
									<label>Ảnh ưu đãi 2</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->banner_ud_2) ? $content->banner_ud_2 :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->banner_ud_2 }}" name="content[banner_ud_2]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="">Tiêu đề đối tượng</label>
									<input type="text" class="form-control" name="content[title_obj]" value="{{ @$content->title_obj}}">
								</div>
								<div class="form-group">
									<label for="">Mô tả đối tượng</label>
									<textarea type="text" class="form-control" name="content[des_obj]">{{ @$content->des_obj}}</textarea>
								</div>
								<div class="form-group">
									<label for="">Điều kiện</label>
									<input type="text" class="form-control" name="content[dk_obj]" value="{{ @$content->dk_obj}}">
								</div>
								<div class="form-group">
									<label for="">Link</label>
									<input type="text" class="form-control" name="content[link_obj]" value="{{ @$content->link_obj}}">
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane " id="activity5">
						<div class="row">
							<div class="col-lg-2">
								<div class="form-group">
									<label>Logo</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->logo_ft) ? $content->logo_ft :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->logo_ft }}" name="content[logo_ft]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<label for="">Giới thiệu</label>
									<textarea type="text" class="form-control" rows="4" name="content[intro]">{{ @$content->intro }}</textarea>
								</div>
								<div class="form-group">
									<label for="">Địa chỉ</label>
									<input type="text" class="form-control" name="content[address]" value="{{ @$content->address }}">
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<label for="">Hotline</label>
									<input type="text" class="form-control" name="content[hotline]" value="{{ @$content->hotline }}">
								</div>
								<div class="form-group">
									<label for="">Link</label>
									<input type="text" class="form-control" name="content[link]" value="{{ @$content->link }}">
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<label for="">Link tải android</label>
									<input type="text" class="form-control" name="content[link_android]" value="{{ @$content->link_android }}">
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<label for="">Link tải ios</label>
									<input type="text" class="form-control" name="content[link_ios]" value="{{ @$content->link_ios}}">
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane " id="activity4">
						<div class="row">
							<div class="col-sm-2">
								<div class="form-group">
									<label>Logo</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->logo) ? $content->logo :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->logo }}" name="content[logo]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-10">
								<div class="form-group">
									<label for="">Tiêu đề</label>
									<input type="text" class="form-control" name="content[title_event]" value="{{ @$content->title_event }}">
								</div>
								<div class="form-group">
									<label for="">Thời gian</label>
									<input type="text" class="form-control" name="content[time_event]" value="{{ @$content->time_event }}">
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane active" id="activity">
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Favicon</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->favicon) ? $content->favicon :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->favicon }}" name="content[favicon]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>
							

							
							
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Code Fanpages Facebook</label>
									<textarea name="content[code_facebook]" class="form-control" rows="10">{!! @$content->code_facebook !!}</textarea>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Code Google Analytics</label>
									<textarea name="content[google_analytics]" class="form-control" rows="10">{!! @$content->google_analytics !!}</textarea>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Script</label>
									<textarea name="content[script]" class="form-control" rows="10">{!! @$content->script !!}</textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								
								<div class="form-group">
									<label class="custom-checkbox">
										<input type="checkbox" name="content[index_google]" value="1" {{ @$content->index_google == 1 ? 'checked' : null }}> 
										Cho phép google tìm kiếm
									</label>
								</div>

							</div>
						</div>
					</div>

					<div class="tab-pane" id="activity2">
						<div class="row">
							<div class="col-sm-2">
								<div class="form-group">
									<label>Hình ảnh đại diện khi chia sẻ</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->logo_share) ? $content->logo_share :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->logo_share }}" name="content[logo_share]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-10">
								<div class="form-group">
									<label for="">Tên website</label>
									<input type="text" class="form-control" name="content[site_title]"
									value="{{ @$content->site_title }}">
								</div>

								<div class="form-group">
									<label for="">Mô tả ngắn</label>
									<textarea class="form-control" rows="5" 
									name="content[site_description]">{{ @$content->site_description }}</textarea>
								</div>

								<div class="form-group">
									<label for="">Meta keyword</label>
									<input type="text" class="form-control" name="content[site_keyword]"
									value="{{ @$content->site_keyword }}">
								</div>

							</div>
						</div>
					</div>
					
					<div class="tab-pane" id="activity3">
						<div class="row">
							<div class="col-sm-12">
								<div class="repeater" id="repeater">
									<table class="table table-bordered table-hover">
										<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th>Tên mạng xã hội</th>
												<th>Icon</th>
												<th>Liên kết</th>
												<th></th>
											</tr>
										</thead>
										<tbody id="sortable">
											@if (!empty($content->social))
												@foreach ($content->social as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-social')
												@endforeach
											@endif
										</tbody>
									</table>
									<div class="text-right">
										<button class="btn btn-primary" 
											onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'social')">Thêm
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-primary" type="submit">Lưu lại</button>
				</div>
			</div>
		</form>
    </div>
@stop