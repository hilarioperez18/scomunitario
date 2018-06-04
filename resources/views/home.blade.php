@extends('layouts.app')

@section('htmlheader_title')
	Inicio
@endsection


@section('main-content')
@section('contentheader_title', 'MANZANAS')
@section('contentheader_description', 'Administración de las Manzanas')

	<div class="container spark-screen">
		


					
					<!--
					<div class="panel-heading">Inicio</div> 

					<div class="panel-body">
						{{ trans('adminlte_lang::message.logged') }}
					</div>
					-->


		<div class="row">
            <div class="col-lg-3 col-xs-5">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>Manzana<sup style="font-size: 20px"> 35</h3>
                <!--  <p>New Orders</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Ver / Administrar <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-5">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>Manzana<sup style="font-size: 20px"> 36</sup></h3>
                <!--  <p>Bounce Rate</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Ver / Administrar <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-5">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>Manzana<sup style="font-size: 20px"> 37</h3>
                <!--  <p>User Registrations</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Ver / Administrar <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-5">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>Manzana<sup style="font-size: 20px"> 38</h3>
                  <!-- <p>Unique Visitors</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Ver / Administrar <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->


	</div>
	
@endsection
