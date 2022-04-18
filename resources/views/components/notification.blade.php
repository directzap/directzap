<a id="dropdown_notification" class="nav-link" href="javascript:void(0);" data-toggle="dropdown">
    <i class="ficon" data-feather="bell"></i>
   @if ($count > 0)
   <span class="badge badge-pill badge-danger badge-up">{{ $count }}</span>
   @endif
</a>
<ul  class="dropdown-menu dropdown-menu-media dropdown-menu-right">
<li class="dropdown-menu-header">
    <div class="dropdown-header d-flex">
        <h4 class="notification-title mb-0 mr-auto">Notificações</h4>
        <div class="badge badge-pill badge-light-primary">{{ $count }} Novas</div>
    </div>
</li>
<li class="scrollable-container media-list">
    <!-- <a class="" href="javascript:void(0)"> -->
        @foreach ($updates as $record)
        <div class="media d-flex align-items-start" >
            <div class="media-left">
                <div class="avatar"><img src="{{ asset('assets/images/portrait/small/avatar-s-15.jpg')}}" alt="avatar" width="32" height="32"></div>
            </div>
            <div class="media-body">
                <p class="media-heading"><span class="font-weight-bolder">{{ $record->title }}</span></p><small class="notification-text"> {{ $record->messsage }}</small>
            </div>
            <button class="btn btn-absolute-media" 
                        data-toggle="tooltip" data-placement="top" title="" data-original-title="Remover Notificação"> 
                <i data-feather="trash-2" class="icon text-danger fas fa-trash"></i>
            </button>
        </div>
       
        @endforeach
        <div class=" d-flex align-items-start">
            <div class="ml-1" style="margin: 3px 0">
                <small style="color: rgba(255, 255, 255, .7)">Alertas</small>
            </div>
           
        </div>
       
        @foreach ($alerts as $record)
        <div class="media d-flex align-items-start">
            <div class="media-left">
                <div class="avatar"><img src="{{ asset('assets/images/portrait/small/avatar-s-15.jpg')}}" alt="avatar" width="32" height="32"></div>
            </div>
            <div class="media-body">
                <p class="media-heading"><span class="font-weight-bolder">{{ $record->title }}</span></p><small class="notification-text"> {{ $record->messsage }}</small>
            </div>
            <button class="btn btn-absolute-media"  
                        data-toggle="tooltip" data-placement="top" title="" data-original-title="Remover Notificação"> 
                <i data-feather="trash-2" class="icon text-danger fas fa-trash"></i>
            </button>
        </div>
        @endforeach
       
    <!--</a> -->

    {{--<div class="media d-flex align-items-center">
        <h6 class="font-weight-bolder mr-auto mb-0">Notificações de Atualizações</h6>
      <!--  <div class="custom-control custom-control-primary custom-switch">
            <input class="custom-control-input" id="systemNotification" type="checkbox" checked="">
            <label class="custom-control-label" for="systemNotification"></label>
        </div>-->
    </div>
    <a class="d-flex" href="javascript:void(0)">
        <div class="media d-flex align-items-start">
            <div class="media-left">
                <div class="avatar bg-light-danger">
                    <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                </div>
            </div>
            <div class="media-body">
                <p class="media-heading"><span class="font-weight-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to hight CPU usage</small>
            </div>
        </div>
    </a>
    --}}
</li>  
<li class="dropdown-menu-footer">
    <a class="btn btn-primary btn-block" href="{{ route('notifications.index') }}">Ver Todas Notificações</a></li>
</ul>