@extends('layouts.admin')
@section('title', 'Users - Falstore Admin')
@section('content')

<div id="wrapper">
  <div id="page" class="">
    <div class="layout-wrap">

      @include('components.admin.sidemenu')

      <div class="section-content-right">
        @include('components.admin.header')

        <div class="main-content">
          <div class="main-content-inner">
            <div class="main-content-wrap">
              <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Users</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                  <li>
                    <a href="{{ route('admin.dashboard') }}">
                      <div class="text-tiny">Dashboard</div>
                    </a>
                  </li>
                  <li>
                    <i class="icon-chevron-right"></i>
                  </li>
                  <li>
                    <div class="text-tiny">Users</div>
                  </li>
                </ul>
              </div>

              <div class="wg-box">
                <div class="flex items-center justify-between gap10 flex-wrap">
                  <div class="wg-filter flex-grow">
                    <form class="form-search" method="GET" action="{{ route('admin.users') }}">
                      <fieldset class="name">
                        <input type="text" placeholder="Search users..." class="" name="search" tabindex="2"
                          value="{{ request('search') }}">
                      </fieldset>
                      <div class="button-submit">
                        <button class="" type="submit"><i class="icon-search"></i></button>
                      </div>
                    </form>
                  </div>
                </div>

                @if (Session::has('status'))
                  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <i class="icon-check-circle me-2"></i>{{ Session::get('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                <div class="wg-table table-all-user">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 60px;">#</th>
                          <th>User</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Role</th>
                          <th>Joined</th>
                          <th style="width: 100px;">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($users as $user)
                          <tr>
                            <td>{{ $user->id }}</td>
                            <td class="pname">
                              <div class="image">
                                <img src="{{ asset('images/admin/avatar/user-1.png') }}" alt="{{ $user->name }}" class="image" style="width: 40px; height: 40px; border-radius: 50%;">
                              </div>
                              <div class="name">
                                <span class="body-title-2">{{ $user->name }}</span>
                              </div>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->mobile ?? '-' }}</td>
                            <td>
                              @if($user->utype === 'ADM')
                                <span class="badge bg-danger">Admin</span>
                              @else
                                <span class="badge bg-info">Customer</span>
                              @endif
                            </td>
                            <td>{{ $user->created_at->format('d M Y') }}</td>
                            <td>
                              <span class="badge bg-success">Active</span>
                            </td>
                          </tr>
                        @empty
                          <tr>
                            <td colspan="7" class="text-center py-4">
                              <div class="empty-state">
                                <i class="icon-users" style="font-size: 48px; color: #ccc;"></i>
                                <p class="mt-3 text-muted">No users found</p>
                              </div>
                            </td>
                          </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>

                  @if($users->hasPages())
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                      {{ $users->links('pagination::bootstrap-5') }}
                    </div>
                  @endif
                </div>
              </div>
            </div>
          </div>

          <div class="bottom-page">
            <div class="body-text">Copyright © {{ date('Y') }} Falstore. All rights reserved.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
