@extends('layouts.app') 
@section('title', 'About') 
@section('content')
<div class="row">
    <div class="col-lg-4">
      <rd-widget>
        <rd-widget-header icon="fa-tasks" title="Servers">
          <h4>
          <a class="pr-5">Breed</a>
          <a class="pl-5">Created/Updated at</a>
          </h4>
        </rd-widget-header>
        <rd-widget-body classes="medium no-padding">
          <div class="table-responsive">
            <table class="table table-striped">
              <tbody>
                @if (count($breeds)>0)
                  @for ($i = 0; $i < count($breeds); $i++)
                    @if (!$breeds[$i]->reviewed)
                      <tr><td><a href="/breeds/{{$breeds[$i]->id}}">{{$breeds[$i]->breed}}</a></td><td>
                      @if (empty($breeds[$i]->updated_at))
                        {{$breeds[$i]->created_at}}
                      @else
                        {{$breeds[$i]->updated_at}}
                      @endif
                        
                      </td></tr>
                    @endif
                  @endfor
                @else
                  <tr><td>No created breeds to review</td></tr>
                @endif
              </tbody>
            </table>
          </div>      
        </rd-widget-body>
        <rd-widget-footer>
          <ul class="pagination pagination-sm pull-right">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
          <div class="clearfix"></div>
        </rd-widget-footer>
      </rd-widget>
    </div>
    <div class="col-lg-4">
        <rd-widget>
          <rd-widget-header icon="fa-tasks" title="Striped Servers">
            <a href="#">Users</a>
          </rd-widget-header>
          <rd-widget-body classes="medium no-padding">
            <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                  <tr><td>RDVMPC001</td><td>238.103.133.37</td><td><span class="text-success"><i class="fa fa-check"></i></span></td></tr>
                  <tr><td>RDVMPC002</td><td>68.66.63.170</td><td><span class="text-success"><i class="fa fa-check"></i></span></td></tr>
                  <tr><td>RDVMPC003</td><td>76.117.212.33</td><td><span tooltip="Server Down!" class="text-danger"><i class="fa fa-warning"></i></span></td></tr>
                  <tr><td>RDPHPC001</td><td>91.88.224.5</td><td><span class="text-success"><i class="fa fa-check"></i></span></td></tr>
                  <tr><td>RDESX001</td><td>197.188.15.93</td><td><span class="text-success"><i class="fa fa-check"></i></span></td></tr>
                  <tr><td>RDESX002</td><td>168.85.154.251</td><td><span class="text-success"><i class="fa fa-check"></i></span></td></tr>
                  <tr><td>RDESX003</td><td>209.25.191.61</td><td><span tooltip="Server Down!" class="text-danger"><i class="fa fa-warning"></i></span></td></tr>
                  <tr><td>RDESX004</td><td>252.37.192.235</td><td><span class="text-success"><i class="fa fa-check"></i></span></td></tr>
                  <tr><td>RDTerminal01</td><td>139.71.18.207</td><td><span class="text-success"><i class="fa fa-check"></i></span></td></tr>
                  <tr><td>RDTerminal02</td><td>136.80.122.212</td><td><span tooltip="Could not connect!" class="text-warning"><i class="fa fa-flash"></i></span></td></tr>
                  <tr><td>RDDomainCont01</td><td>196.80.245.33</td><td><span class="text-success"><i class="fa fa-check"></i></span></td></tr>
                </tbody>
              </table>
            </div>
          </rd-widget-body>
          <rd-widget-footer>
            <ul class="pagination pagination-sm pull-right">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
            <div class="clearfix"></div>
          </rd-widget-footer>
        </rd-widget>
      </div>
  </div>
@endsection