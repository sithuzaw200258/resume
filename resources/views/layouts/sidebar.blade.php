<div class="list-group mb-3">
    <a href="{{ route('home') }}" class="list-group-item list-group-item-action {{ request()->url() === route('home') ? 'active' : '' }}" aria-current="true">
        <i class="bi bi-house-door me-2"></i>Home
    </a>
    <a href="{{ route('resume.index') }}" class="list-group-item list-group-item-action {{ request()->url() === route('resume.index') ? 'active' : '' }}"><i class="bi bi-eye me-2"></i> Preview Your Resume</a>
    {{-- <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-plus-square me-2"></i>Create Resume</a> --}}
</div>

<p class="text-muted text-uppercase fs-6 mb-1"><i class="bi bi-people-fill me-1"></i>User Details</p>
<div class="list-group mb-3">
    <a href="{{ route('user-details.index') }}" class="list-group-item list-group-item-action {{ request()->url() === route('user-details.index') ? 'active' : '' }}"><i class="bi bi-list-task me-2"></i> User Details</a>
    <a href="{{ route('user-details.create') }}" class="list-group-item list-group-item-action @if (isset($details))
        disabled
    @endif} {{ request()->url() === route('user-details.create') ? 'active' : '' }}"><i class="bi bi-plus-square me-2"></i>Create User</a>
</div>

<p class="text-muted text-uppercase fs-6 mb-1"><i class="bi bi-stack me-1"></i>Manage Education</p>
<div class="list-group mb-3">
    <a href="{{ route('educations.index') }}" class="list-group-item list-group-item-action {{ request()->url() === route('educations.index') ? 'active' : '' }}"><i class="bi bi-list-task me-2"></i> Education Lists</a>
    <a href="{{ route('educations.create') }}" class="list-group-item list-group-item-action {{ request()->url() === route('educations.create') ? 'active' : '' }}"><i class="bi bi-plus-square me-2"></i>Create Education</a>
</div>

<p class="text-muted text-uppercase fs-6 mb-1"><i class="bi bi-award-fill me-1"></i>Manage Experience</p>
<div class="list-group mb-3">
    <a href="{{ route('experience.index') }}" class="list-group-item list-group-item-action {{ request()->url() === route('experience.index') ? 'active' : '' }}"><i class="bi bi-list-task me-2"></i> Experience Lists</a>
    <a href="{{ route('experience.create') }}" class="list-group-item list-group-item-action {{ request()->url() === route('experience.create') ? 'active' : '' }}"><i class="bi bi-plus-square me-2"></i>Create Experience</a>
</div>

<p class="text-muted text-uppercase fs-6 mb-1"><i class="bi bi-rocket-fill me-1"></i>Manage Skills</p>
<div class="list-group mb-3">
    <a href="{{ route('skills.index') }}" class="list-group-item list-group-item-action {{ request()->url() === route('skills.index') ? 'active' : '' }}"><i class="bi bi-list-task me-2"></i> Skill Lists</a>
    <a href="{{ route('skills.create') }}" class="list-group-item list-group-item-action {{ request()->url() === route('skills.create') ? 'active' : '' }}"><i class="bi bi-plus-square me-2"></i>Create Skill</a>
</div>

<p class="text-muted text-uppercase fs-6 mb-1"><i class="bi bi-translate me-1"></i>Manage Languages</p>
<div class="list-group">
    <a href="{{ route('languages.index') }}" class="list-group-item list-group-item-action {{ request()->url() === route('languages.index') ? 'active' : '' }}"><i class="bi bi-list-task me-2"></i> Language Lists</a>
    <a href="{{ route('languages.create') }}" class="list-group-item list-group-item-action {{ request()->url() === route('languages.create') ? 'active' : '' }}"><i class="bi bi-plus-square me-2"></i>Create Language</a>
</div>