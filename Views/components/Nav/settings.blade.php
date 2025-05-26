<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Settings</a>
    <div class="dropdown-menu m-0">
        @if(\EvoPhp\Api\Operations::checkAccess("1"))
        <a href="#/admin/options" class="dropdown-item">System Settings</a>
        @endif
        <a href="#/configuration" class="dropdown-item">Configuration</a>
        <a href="open.html" class="dropdown-item">Working Hours</a>
        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
        <a href="404.html" class="dropdown-item">404 Page</a>
    </div>
</div>