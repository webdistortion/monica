@extends('layouts.skeleton')
@section('title', $contact->getCompleteName() )
@section('content')
  <div class="people-show">
    {{ csrf_field() }}

    {{-- Breadcrumb --}}
    <div class="breadcrumb">
      <div class="{{ Auth::user()->getFluidLayout() }}">
        <div class="row">
          <div class="col-xs-12">
            <ul class="horizontal">
              <li>
                <a href="/dashboard">{{ trans('app.breadcrumb_dashboard') }}</a>
              </li>
              <li>
                <a href="/people">{{ trans('app.breadcrumb_list_contacts') }}</a>
              </li>
              <li>
                {{ $contact->getCompleteName() }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    {{-- Page header --}}
    @include('people._header')

    {{-- Page content --}}
    <div class="main-content profile">

      <div class="{{ Auth::user()->getFluidLayout() }}">

        <div class="row">
          <div class="col-xs-12 col-sm-3 profile-sidebar">
            @include('people.dashboard.index')
          </div>

          <div class="col-xs-12 col-sm-9">
            <div class="row section notes">
              @include('people.notes.index')
            </div>

            <div class="row section activities">
              @include('people.activities.index')
            </div>

            <div class="row section reminders">
              @include('people.reminders.index')
            </div>

            <div class="row section tasks">
              @include('people.tasks.index')
            </div>

            <div class="row section gifts">
              @include('people.gifts.index')
            </div>

            <div class="row section debts">
              @include('people.debt.index')
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
@endsection
