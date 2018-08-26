@extends('admin.layout.dashboard')


@section('contentpages')




<div class="row" >
    <div class="col-xs-12" dir="rtl">
      <div class="box box-warning">

        <div class="box-header">
          <h3 class="box-title">{{ trans('language.approve plans') }}</h3>
          <div class="box-body">
              {{-- --------- search ---------- --}}
          <div class="container" style="float:right; padding:15px;">
            <table>
              <tr>

              <form action="{{ route('search.result')}}" method="GET" style="margin:right">
                  <td>
                      <div>
                          <input class="" type="checkbox" id="inlineCheckbox1" value="pendding" name="search[]">
                          <label class="" for="inlineCheckbox1">
                            <h4><span class="label label-warning h4">{{ trans('language.pendding') }}</span></h4>
                        </label>
                      </div>
                  </td> 


                  
                  <td>
                    <div>
                      <input class="" type="checkbox" id="inlineCheckbox2" value="approved" name="search[]">
                      <label class="" for="inlineCheckbox2">
                        <h4><span class="label label-success h4">{{ trans('language.approved') }}</span></h4>
                      </label>
                    </div>
                  </td>   
                  
                  <td >
                      <div>
                          <input class="" type="checkbox" id="inlineCheckbox3" value="rejected" name="search[]">
                          <label class="" for="inlineCheckbox3">
                        <h4><span class="label label-danger h4">{{ trans('language.rejected') }}</span></h4>
                          </label>
                        </div>
                    </td>
 
                
                <td class="col col-md-1">
                    <input type="submit" class="btn btn-primary btn-sm" value="{{ trans('language.search') }}">
                </td>
          </form>

          <td>
              <a class="btn btn-info btn-sm" href="{{ url('/pendding/plan/page')}}">إعادة تعيين</a>
          </td>

              </tr>
        </table>
      </div>  
    </div>
              {{-- ------------------- --}}

        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th class="text-right">{{ trans('language.id') }}</th>
              <th class="text-right">{{ trans('language.company name') }}</th>
              <th class="text-right">{{ trans('language.plan title') }}</th>
              <th class="text-right">{{ trans('language.status') }}</th>
              <th class="text-right"></th>
              @foreach($subscription as $subscription)
            </tr>
            <tr>
              <td>{{$subscription->id}}</td>
              <td><a>{{$subscription->user->name}}</a></td>
              <td>{{$subscription->plan->title}}</td>
              <td><h4>
              @if($subscription->approve == 0)
               <span class="label label-warning h4">{{ trans('language.pendding') }}</span>
              @elseif($subscription->approve == 1)
              <span class="label label-success h4">{{ trans('language.approved') }}</span>
              @elseif($subscription->approve == 2)
              <span class="label label-danger h4">{{ trans('language.rejected') }}</span>
              @endif

             </h4>
                
            </td>
              <td>
                  <a href="{{URL::to('plan/approve/'.$subscription->id)}}" class="btn btn-success">{{ trans('language.approve') }}</a>
                  <a href="{{URL::to('plan/reject/'.$subscription->id)}}" class="btn btn-danger">{{ trans('language.reject') }}</a>
                  <a href="{{URL::to('plan/pendding/'.$subscription->id)}}" class="btn btn-warning">{{ trans('language.pendding') }}</a>
              </td>
            </tr>
            
            @endforeach

          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>

@endsection