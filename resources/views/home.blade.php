@extends('layouts.side')

@section('content')
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
                <div class="container-fluid ms-5">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        <ul class="navbar-nav me-5 ms-auto mb-2 mb-lg-0 ">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{auth()->user()->username}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">
                                      <span class="me-2"><i class="fas fa-users-cog"></i></span> Edit Profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{route('logout')}}">
                                    <span class="me-2"><i class="fas fa-power-off"></i></span> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
    <div class="container">
        <div class="row text-white d-flex justify-content-center">
            <div class="col-md-4 mb-2 me-5">
                <div class="bg-first container">
                    <div class="d-flex justify-content-between">

                        <div style="font-family: Georgia, 'Times New Roman', Times, serif;">
                            <h4>Your Balance</h4>
                            <p class="h5 text-uppercase">{{auth()user()->topups()->topup}}</p>
                        </div>
                        <div class="mt-auto mb-1">
                            <i class="refresh fas fa-sync-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ms-5">
                <div class="bg-first container">
                    <div style="font-family: Georgia, 'Times New Roman', Times, serif;">
                        <h4>Office Account</h5>
                        <h5>Total Expense</h5>
                    </div>
                    <div class="expense" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                        <p class="text-uppercase text-center h6">ghs 200.67</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="mb-4 me-5 ms-5 text-white" style="border-bottom: 3px solid white;">
    <div class="tab-content me-3">
                <div class="tab-pane show active" id="home1">
                    <div class="border mb-3 mt-0 rounded">
                        <div class="d-flex justify-content-between">
                            <h5 class="header-title p-2 mb-0 text-white">Recent Requests</h5>
                            <a href="request.php" class="mt-2 me-3 see">See all</a>
                        </div>
                        <div class="table-responsive" style="height: 300px;">
                            <table class="table table-borderless table-dark table-striped table-nowrap mb-0">
                                <tbody>
                                    
                                    <tr>
                                        <td style="width: 30px;">
                                            <div class="avatar-sm rounded bg-soft-info">
                                                <i class="fas fa-history ms-2 avatar-title"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="font-weight-semibold text-center">Stationary Item</p>
                                        </td>

                                        <td class="text-right">
                                            GHS 90,039.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;">
                                            <div class="avatar-sm rounded bg-soft-info">
                                                <i class="fas fa-history ms-2  font-4 avatar-title"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <p
                                                class="font-weight-semibold text-center">Bolt fair to Oceanic</p>
                                            
                                        </td>

                                        <td class="text-right">
                                            GHS 90,039.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;">
                                            <div class="avatar-sm rounded bg-soft-info">
                                                <i class="fas fa-history ms-2 font-4 avatar-title"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <p
                                                class="font-weight-semibold text-center">Fuel for Company cars</p>
                                            
                                        </td>

                                        <td class="text-right">
                                            GHS 90,039.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;">
                                            <div class="avatar-sm rounded bg-soft-info">
                                                <i class="fas fa-history ms-2 font-4 avatar-title"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <p
                                                class="font-weight-semibold text-center">Pizza for the boys</p>
                                            
                                        </td>

                                        <td class="text-right">
                                            GHS 90,039.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;">
                                            <div class="avatar-sm rounded bg-soft-info">
                                                <i class="fas fa-history ms-2 font-4 avatar-title"></i>
                                            </div>
                                        </td>

                                        <td>
                                            <p
                                                class="font-weight-semibold text-center">Red Hoodie for men</p>
                                            
                                        </td>
                                        <td class="text-right">
                                            USD 5,700.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10px;">
                                            <div class="avatar-sm rounded bg-soft-info">
                                                <i class="fas fa-history ms-2 font-4 avatar-title"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <p
                                                class="font-weight-semibold text-center">Designer Awesome T-Shirt</p>
                                            
                                        </td>
                                        <td class="text-right">
                                            SLL 888.00
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div> <!-- end .border-->

                </div>    
</div>  
@endsection