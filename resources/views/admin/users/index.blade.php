@extends('layouts.admin')
@section('content')



<div class="content-module">
				
    <div class="content-module-heading cf">
    
        <h3 class="fl">Users List</h3>
        <span class="fr expand-collapse-text">Click to collapse</span>
        <span class="fr expand-collapse-text initial-expand">Click to expand</span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="content-module-main">
    
        <table>
        
            <thead>
        
                <tr>
                    <th><input type="checkbox" id="table-select-all"></th>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Email</th>
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
                @foreach($users as $user)
                <tr>
                    <td><input type="checkbox"></td>
                    <td>{{$user->id}}</td>
                    <td><img width="120" src="{{$user->photo ? $user->photo->file : 'no photo'}}"></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'not Active'}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>
                        <a href="/admin/users/{{$user->id}}/edit" class="table-actions-button ic-table-edit"></a>
                        <a href="{{ URL::to('/admin/users/'. $user->id) }}" class="table-actions-button ic-table-delete"></a>
                    </td>
                </tr>
                @endforeach
            
            </tbody>
            
        </table>
    
    </div> <!-- end content-module-main -->

</div> 




@stop