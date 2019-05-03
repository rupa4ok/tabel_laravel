@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    
                    <div class="card-body">
                        
                        
                        @foreach ($items as $item)
                            <a href="{{ route('admin.work.show', $item, $item->id) }}">
                                {{ $item->name }}
                            </a><br>
                        @endforeach
                         
                         {{ $items->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
