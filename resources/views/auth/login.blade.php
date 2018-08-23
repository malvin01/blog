@extends('layouts.app')

@section('content')
 <div class="ui container">
    <br>
            <div class="ui black raised segment a">
                <center>
                        <h2 class="ui header">Login</h2>
                </center>
                  <div class="ui divider"></div>
                  <form class="ui  form"  method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}
                    <div class="ui   raised tall stacked segment">
                      <div class="field">
                        <div class="ui left icon input">
                          <i class="user icon"></i>
                          <input type="text" name="email" placeholder="E-mail address" value="{{ old('email') }}">
                        </div>
                      </div>
                      <div class="field">
                        <div class="ui left icon input">
                          <i class="lock icon"></i>
                          <input type="password" name="password" placeholder="Password">
                        </div>
                      </div>
                      <div class="inline field">
                        <div class="ui toggle checkbox">
                          <input type="checkbox" tabindex="0" class="hidden">
                          <label>Remember me</label>
                        </div>
                      </div>
                      <div class="ui divider"></div>
                      <center>
                        <button class="button button--wayra button--border-thick button--text-upper button--size-s">Login</button>
                      </center>
                    </div>
                    
                    <div class="ui error message"></div>
                    
                  </form>
            
                  </div>
                  

    </div>
@endsection
