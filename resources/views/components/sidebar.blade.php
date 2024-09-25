<nav id="sidebar">
  <ul class="sidebar-items flexbox-col">
    <li class="sidebar-logo flexbox-center">
      <a class="sidebar-item-inner flexbox-center">
        <img src="{{ asset('images/chaos-mask-logo.png') }}" alt="Chaos Mask Logo" class="sidebar-logo-img">
      </a>
    </li>
    <li class="sidebar-brand flexbox-center">
      <span class="brand-text">CHAOS MASK</span>
    </li>
    <li class="sidebar-item flexbox-left">
      <a href="{{ route('login') }}" class="sidebar-item-inner flexbox-left login-item">
        <div class="sidebar-item-inner-icon-wrapper flexbox-center">
          <i class="fas fa-user"></i>
        </div>
        <span class="link-text">LOG IN</span>
      </a>
    </li>
    <li class="sidebar-item flexbox-left">
      <a href="{{ route('home') }}" class="sidebar-item-inner flexbox-left">
        <div class="sidebar-item-inner-icon-wrapper flexbox-center">
          <i class="fas fa-home"></i>
        </div>
        <span class="link-text">MAIN</span>
      </a>
    </li>
    <li class="sidebar-item flexbox-left">
      <a href="{{ route('catalog') }}" class="sidebar-item-inner flexbox-left">
        <div class="sidebar-item-inner-icon-wrapper flexbox-center">
          <i class="fas fa-store"></i>
        </div>
        <span class="link-text">CATALOG</span>
      </a>
    </li>
    <li class="sidebar-item flexbox-left">
      <a href="{{ route('about') }}" class="sidebar-item-inner flexbox-left">
        <div class="sidebar-item-inner-icon-wrapper flexbox-center">
          <i class="fas fa-dice-d20"></i>
        </div>
        <span class="link-text">ABOUT US</span>
      </a>
    </li>
    <li class="sidebar-item flexbox-left">
      <a href="{{ route('blog') }}" class="sidebar-item-inner flexbox-left">
        <div class="sidebar-item-inner-icon-wrapper flexbox-center">
          <i class="fas fa-blog"></i>
        </div>
        <span class="link-text">BLOG</span>
      </a>
    </li>
    <li class="sidebar-item flexbox-left">
      <a href="{{ route('contact') }}" class="sidebar-item-inner flexbox-left">
        <div class="sidebar-item-inner-icon-wrapper flexbox-center">
          <i class="fas fa-users"></i>
        </div>
        <span class="link-text">CONTACTS</span>
      </a>
    </li>
  </ul>
</nav>

<style>
  #sidebar {
    width: 90px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    background-image: url('{{ asset('images/dark-texture.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    transition: width 0.3s ease;
    overflow-x: hidden;
    z-index: 99999;
  }

  #sidebar:hover {
    width: 280px;
  }

  .sidebar-items {
    list-style-type: none;
    padding: 0;
    margin: 0;
    height: 100%;
  }

  .sidebar-item {
    width: 100%;
  }

  .sidebar-item-inner {
    display: flex;
    align-items: center;
    padding: 20px 15px;
    color: #f1f1f1;
    text-decoration: none;
    transition: 0.3s;
    width: 100%;
  }

  .sidebar-item-inner:hover {
    color: #ffffff;
    background-color: rgba(255, 255, 255, 0.1);
  }

  .sidebar-logo .sidebar-item-inner:hover {
    background-color: transparent;
  }

  .sidebar-item-inner-icon-wrapper {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    flex-shrink: 0;
  }

  .sidebar-logo {
    padding: 25px 15px 15px;
  }

  .sidebar-logo-img {
    width: 60px;
    height: auto;
  }

  .sidebar-brand {
    padding: 0 15px 25px;
  }

  .brand-text {
    color: #f1f1f1;
    font-size: 16px;
    white-space: nowrap;
    display: none;
  }

  .link-text {
    display: none;
    white-space: nowrap;
    margin-left: 20px;
    font-size: 16px;
    text-transform: uppercase;
  }

  #sidebar:hover .link-text,
  #sidebar:hover .brand-text {
    display: block;
  }

  #sidebar:hover .sidebar-item-inner {
    padding-left: 25px;
  }

  .login-item {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    background-color: rgba(255, 255, 255, 0.1);
  }

  .login-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }

  .flexbox-col {
    display: flex;
    flex-direction: column;
  }

  .flexbox-center {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .flexbox-left {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #sidebar:hover .flexbox-left {
    justify-content: flex-start;
  }

  @media screen and (max-height: 450px) {
    .sidebar-item-inner {
      padding: 15px;
    }
  }

  #sidebar::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.3);
    z-index: -1;
  }
</style>

