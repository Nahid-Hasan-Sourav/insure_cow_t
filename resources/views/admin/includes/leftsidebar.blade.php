<div class="sl-logo"><a href="{{ route('dashboard') }}">DASHBOARD</a></div>
<div class="sl-sideleft">
  <div class="card">
    <div class="">
        <div class="">
            <div class="text-center">
                <img src="{{asset('/')}}admin/assets/img/img9.jpg" class="" alt="..." style="width:100px;border-radius:50%;height:100px;">
              </div>
            <h5>Name : Xavi</h5>
            <h5>Role</h5>
        </div>
    </div>
  </div>

  <div class="sl-sideleft-menu">
    <a href="{{ route('category.view') }}" class="sl-menu-link {{ request()->is('category*') ? 'active' : '' }}">
      <div class="sl-menu-item">
        {{-- <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i> --}}
        <span class="menu-item-label">Category</span>
      </div>
    </a>
   
    <a href="{{ route('product.index') }}" class="sl-menu-link {{ request()->is('product*') ? 'active' : '' }}">
      <div class="sl-menu-item">
          {{-- <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i> --}}
          <span class="menu-item-label">Product</span>
        </div>
      </a>
      <a href="{{ route('largedataset.index') }}" class="sl-menu-link {{ request()->is('largedataset*') ? 'active' : '' }}">
        <div class="sl-menu-item">
            {{-- <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i> --}}
            <span class="menu-item-label">Large Dataset</span>
          </div>
        </a>


  </div>

  <br>
</div>
