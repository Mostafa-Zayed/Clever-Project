                      <tbody>
                        @foreach($rows as $row)
                        <tr>
                            <td style='text-align:center;'>{{++$increment}}</td>
                            <td style='text-align:center;'>{{$row->name}}</td>
                            <td style='text-align:center;'>
                              @if(isset($row->image) && !empty($row->image))
                                <img class='img-thumbnail' src="{{URL::to('/')}}/images/{{$row->image}}" width="50" height="60"/>
                              @else
                                {{'No Icon'}}
                              @endif
                            </td>
                            <td style='text-align:center;'>{{$row->status}}</td>
                            <td class="td-actions text-center">

                            @include('dashboard.shared.buttons.edit',['models'=>$models,'id'=>$row->id])
                              &nbsp;
                              @include('dashboard.shared.buttons.delete',['model'=>$models,'id'=>$row->id])
                            </td>
                        </tr>
                        @endforeach
                      </tbody>