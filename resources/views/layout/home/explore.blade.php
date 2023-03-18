@extends('master')
@section('title', 'Keşfet')
    
@section('content')
<div class="container">
    <div class="page-header border-bottom-white mb-4">
        <h2 id="timeline text-white" style="color:#fff">Keşfet</h2>
    </div>
    <ul class="timeline">
        @foreach ($explores as $index => $item)
        
        <li class="{{ $index % 2 == 0 ? 'timeline-inverted' : '' }}">
            <div class="timeline-badge"><i class="fa-solid fa-calendar"></i></div>
            <div class="timeline-panel bg-light">
              <div class="timeline-heading">
                <h4 class="timeline-title">{{$item->title}}</h4>
                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>{{date_format($item->created_at, 'd M Y')}}</small></p>
              </div>
              <div class="timeline-body">
                <p class="text-muted">{!!$item->detail!!}</p>
              </div>
            </div>
          </li>
        @endforeach
        <li>
            <div class="timeline-badge"><i class="fa-solid fa-calendar"></i></div>
            <div class="timeline-panel bg-light">
              <div class="timeline-heading">
                <h6 class="timeline-title text-muted mb-0">. . . Zamanın başlangıcı...</h6>
                
              </div>
              
            </div>
          </li>
        
    </ul>
</div>
@endsection