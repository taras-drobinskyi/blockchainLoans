@extends('dashboard.master')

@section('content')
<div class="row content">
    <div class="col-sm-3 sidenav">

     @include('dashboard.sidebar')
    
    </div>
    <div class="col-sm-9 text-left"> 
      
        <div class="dashboard" id="el-dashboard">
            <div class="top hide">
                <div class="container-fluid">
                    <h1 class="text-center page-header pull-left dashboard-title">My SALT Dashboard</h1>
                </div>
                <div class="container dash-confirm-prompt">
                    <h4><!-- react-text: 2440 -->*In order to withdraw SALT, your<!-- /react-text --><!-- react-text: 2441 --> <!-- /react-text -->
                        <a href="/upload">identity must be confirmed.</a>
                    </h4>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="flex-1 u-padding-0 col-md-12">
                        <div class="panel panel-default u-margin-0">
                            <div class="panel-heading current-price tier-background">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="panel panel-default tier-plan">
                                            <div class="panel-heading">
                                                <h3>Base</h3>
                                            </div>
                                            <div class="panel-body">
                                                <h2>Borrow up to $10,000</h2>
                                                <label>Annual Cost:</label>
                                                <h1><!-- react-text: 2457 -->1<!-- /react-text --><img src="img/SALT_Delta_Icon.svg" alt="salt"></h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel panel-default tier-plan">
                                            <div class="panel-heading">
                                                <h3>Premier</h3>
                                            </div>
                                            <div class="panel-body">
                                                <h2>Borrow up to $100,000</h2>
                                                <label>Annual Cost:</label>
                                                <h1><!-- react-text: 2467 -->10<!-- /react-text -->
                                                    <img src="img/SALT_Delta_Icon.svg" alt="salt">
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel panel-default tier-plan">
                                            <div class="panel-heading">
                                                <h3>Enterprise</h3>
                                            </div>
                                            <div class="panel-body">
                                                <h2>Borrow over $1,000,000</h2>
                                                <label>Annual Cost:</label>
                                                <h1><!-- react-text: 2477 -->100<!-- /react-text -->
                                                    <img src="img/SALT_Delta_Icon.svg" alt="salt">
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="equal no-wrap row">
                    <div class="panel panel-default purchase-salt LoanInquiry">
                        <div class="panel-heading">
                            <h3 class="text-center">
                                <span class="salt-icons-purchase"></span>
                                <!-- react-text: 2484 --> Apply<!-- /react-text -->
                            </h3>
                        </div>
                        <div class="panel-body LoanInquiry-triggerSection">
                            <div style="width: 100%; padding: 15px;">
                                <div class="LoanInquiry-stats">
                                    <dl class="row">
                                        <dd>68,404</dd>
                                        <dt>platform users</dt>
                                    </dl>
                                    <dl class="row">
                                        <dd><!-- react-text: 2493 -->$<!-- /react-text --><!-- react-text: 2494 -->40<!-- /react-text --><!-- react-text: 2495 -->+ Million<!-- /react-text --></dd>
                                        <dt>in loans serviced</dt>
                                    </dl>
                                </div>
                                <div class="row">
                                    <button disabled="" type="button" class="LoanInquiry-trigger btn btn-default">Request a Loan</button>
                                </div>
                                <div class="row">
                                    <p class="LoanInquiry-legalNote">
                                        <a href="/files/Alternative-Scheduled-Payments-Policy.pdf" target="_blank" rel="noopener noreferrer" class="sidebar-link" style="margin-top: 15px;">Alternative Scheduled Payments Policy</a>
                                        <br>
                                        <!-- react-text: 2503 -->* Some restrictions apply. Subject to KYC, AML, and suitability screening.<!-- /react-text -->
                                    </p>
                                </div>
                                <div class="LoanInquiry-error row">You have unfinished verifications or haven't purchased a membership and can't request a loan until those are done.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default purchase-salt">
                        <div class="purchase-buttons">
                            <div class="panel-heading">
                                <h3 class="text-center">
                                    <span class="salt-icons-purchase"></span>
                                    <!-- react-text: 2510 --> Purchase SALT<!-- /react-text -->
                                </h3>
                            </div>
                            <div class="panel-body">
                                <h4><!-- react-text: 2513 -->* In order to withdraw SALT, you will need to<!-- /react-text --><!-- react-text: 2514 --> <!-- /react-text -->
                                    <a href="/upload" style="color: red; font-weight: bold;">verify your identity.
                                    </a>
                                </h4>
                                <div style="width: 100%; padding: 15px;">
                                    <div class="row">
                                        
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="btn-buy" alt="buy-with-eth">
                                                    <span class="buy-img">
                                                        <img src="img/ethereum_icon.svg">
                                                    </span>
                                                    <div class="btn-buy-content">
                                                        <h3>Buy with Ethereum</h3>
                                                        <label><!-- react-text: 2529 -->1 ETH = $<!-- /react-text --><!-- react-text: 2530 -->531.84<!-- /react-text --><!-- react-text: 2531 --> USD<!-- /react-text --></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="btn-buy row" alt="buy-with-eth">
                                                    <span class="buy-img col-md-4">
                                                        <img src="img/bitcoin_icon.svg">
                                                    </span>
                                                    <div class="btn-buy-content col-md-8">
                                                        <h3>Buy with Bitcoin</h3>
                                                        <label><!-- react-text: 2539 -->1 BTC = $<!-- /react-text --><!-- react-text: 2540 -->6,758.76<!-- /react-text --><!-- react-text: 2541 --> USD<!-- /react-text --></label>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                              </div><!-- react-empty: 2544 --><!-- react-empty: 2545 -->
                          </div>
                      </div>
                  </div>
                  <div class="history-table row"><div class="col-md-12"><div class="panel panel-default transactions"><div class="panel-heading"><h3><span class="salt-icons-history"></span><!-- react-text: 2552 -->Transaction History<!-- /react-text --></h3></div><div class="panel-body"><div class="table-responsive"><table class="table table-striped"><thead><tr><th>Date Received</th><th>Type</th><th>Amount (Crypto)</th><th>Amount (USD)</th><th>Amount (SALT)</th><th>Status</th><th></th></tr></thead><tbody></tbody></table></div></div></div></div></div></div><!-- react-empty: 2566 --><!-- react-empty: 2567 --><!-- react-empty: 2568 --></div>





    </div>
    
  </div>
@endsection
