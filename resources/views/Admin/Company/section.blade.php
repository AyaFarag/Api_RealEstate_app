@foreach($subscription as $subscription)
<div class="col-md-4 align-items-center all {{$subscription->status}} mt-2" >
    <tr >
      <td>{{$subscription->id}}</td>
      <td><a>{{$subscription->user->name}}</a></td>
      <td>{{$subscription->plan->title}}</td>
      <td>{{$subscription->created_at}}</td>
      <td><h4>
          @if($subscription->approve == 0)
          <span class="label label-warning h4">{{ trans('language.pendding') }}</span>
         @elseif($subscription->approve == 1)
         <span class="label label-success h4">{{ trans('language.approved') }}</span>
         @elseif($subscription->approve == 2)
         <span class="label label-danger h4">{{ trans('language.rejected') }}</span>
         @endif
        
        </h4> </td>
      <td>
          <a href="{{URL::to('company/approve/'.$subscription->id)}}" class="btn btn-success">{{ trans('language.approve') }}</a>
          <a href="{{URL::to('company/reject/'.$subscription->id)}}" class="btn btn-danger">{{ trans('language.reject') }}</a>
      </td>
    </tr>
</div>
@endforeach