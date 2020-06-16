@extends('layouts.dashboardstructure')

@section('title','Table')

@section('content')


        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>ຕາຕະລາງຂໍ້ມູນພະນັກງານ</h4>

                    <a href="{{route('insert')}}" class="btn btn-primary">ເພີ່ມຂໍ້ມູນ</a>
                  
                  </div>
                  <div class="card-body">
                  
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>ຊື່</th>
                            <th>ນາມສະກຸນ</th>
                            <th>ເພດ</th>
                            <th>ວ/ດ/ປ ເກີດ</th>
                            <th>ບ້ານເກີດ</th>
                            <th>ເມືອງ</th>
                            <th>ແຂວງ</th>
                            <th>ບ້ານຢູ່ປັດຈຸບັນ</th>
                            <th>ເມືອງ</th>
                            <th>ແຂວງ</th>
                            <th>ເບີໂທ</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($emp as $emps)
                          <tr>
                            <td>
                              {{$emps->id}}
                            </td>
                            <td>
                              {{$emps->name}}
                            </td>
                            <td>
                              {{$emps->surname}}
                            </td>
                            <td>
                              {{$emps->gender}}
                            </td>
                            <td>
                              {{$emps->date_of_birth}}
                            </td>
                            <td>
                              {{$emps->past_village}}
                            </td>
                            <td>
                              {{$emps->past_city}}
                            </td>
                            <td>
                              {{$emps->past_province}}
                            </td>
                            <td>
                              {{$emps->current_village}}
                            </td>
                            <td>
                              {{$emps->current_city}}
                            </td>
                            <td>
                              {{$emps->current_province}}
                            </td>
                            <td>
                              {{$emps->tel}}
                            </td>
                            <td>
                            <div class="dropdown show">
                              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width:10%">
                                <a class="dropdown-item btn-warning" href="{{url('form.edit/'.$emps->id)}}" onclick="return confirm('ທ້ານຕ້ອງການແກ້ໄຂຂໍ້ມູນນີ້ແທ້ບໍ?')" ><i class="far fa-edit mr-1"></i>Edit</a>
                                
                                <form action="{{url('form.del/'.$emps->id)}}" method="post">
                                              {{method_field('DELETE')}}
                                                      {{csrf_field()}}
                                                      
                              <button type="submit" class="dropdown-item btn-danger" onclick="return confirm('ທ້ານຕ້ອງການລົບຂໍ້ມູນນີ້ແທ້ບໍ?')" ><i class="far fa-trash-alt mr-1" ></i>Delete</button>

                                </form>
                              </div>
                            </div>
                            </td>
                          </tr>
                          @endforeach
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            </div>
          </div>
        </section>

@endsection