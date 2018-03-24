@extends('layouts.admin')
@section('content')

<div class="content-module">
				
    <div class="content-module-heading cf">
    
        <h3 class="fl">Posts List</h3>
        <span class="fr expand-collapse-text">Click to collapse</span>
        <span class="fr expand-collapse-text initial-expand">Click to expand</span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="content-module-main">
        @if(Session::has('delete_post'))
           <div class="warning-box round">{!! session('delete_post') !!}</div>
        @endif
        <table>
        
            <thead>
        
                <tr>
                    <th><input type="checkbox" id="table-select-all"></th>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>Author</th>
                    <th>Name</th>
                    <th>Blog</th>
                    <th>Category</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            
            </thead>

            <tfoot>
            
                <tr>
                
                    <td colspan="5" class="table-footer">
                    
                        <label for="table-select-actions">With selected:</label>

                        <select id="table-select-actions">
                            <option value="option1">Delete</option>
                            <option value="option2">Export</option>
                            <option value="option3">Archive</option>
                        </select>
                        
                        <a href="#" class="round button blue text-upper small-button">Apply to selected</a>	

                    </td>
                    
                </tr>
            
            </tfoot>
            
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td><input type="checkbox"></td>
                    <td>{{$post->id}}</td>
                    <td><img width="120" src="{{$post->photo ? $post->photo->file : '/images/company-logo.png'}}"></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->title}}</td>post
                    <td>{{$post->body}}</td>
                    <td>{{$post->category ? $post->category->name : 'Uncategorised'}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>
                        <a href="{{ URL::to('/admin/posts/'. $post->id).'/edit' }}" class="table-actions-button ic-table-edit"></a>
                        <a href="{{ URL::to('/admin/posts/'. $post->id).'/destroy' }}" class="table-actions-button ic-table-delete"></a>
                    </td>
                </tr>
                @endforeach
            
            </tbody>
            
        </table>
    
    </div> <!-- end content-module-main -->

</div> 




@stop