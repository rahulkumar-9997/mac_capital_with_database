<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail; 
use App\Mail\EachPageFormMail; 
use Exception;
use Auth;
use Session;
use DB;
use Hash;
use Illuminate\Support\Facades\Validator;
class FrontHomeController extends Controller
{
    public function home(){
        return view('frontend.index');
    }

    public function aboutUs(){
	    return view('frontend.pages.about-us');
    }

    public function financialServices(){
	    return view('frontend.pages.financial-services.index');
    }

    public function multiFacetedStyle(){
	    return view('frontend.pages.financial-services.multi-facetedstyle');
    }

    public function capitalRaising(){
	    return view('frontend.pages.financial-services.capital-raising');
    }

    public function privateEquityPlacement(){
	    return view('frontend.pages.financial-services.private-equity-placement');
    }

    public function internationalDebtSolution(){
	    return view('frontend.pages.financial-services.internationaldebt-solutions');
    }

    public function internationalStructuredSolutions(){
	    return view('frontend.pages.financial-services.international-structured');
    }

    public function internationalMAandSservices(){
	    return view('frontend.pages.financial-services.international-m-and-sservices');
    }

    public function corporateAdvisory(){
	    return view('frontend.pages.corporate-advisory.index');
    }

    public function mergersAquisitions(){
	    return view('frontend.pages.corporate-advisory.mergers-and-aquisitions');
    }

    public function divestitures(){
	    return view('frontend.pages.corporate-advisory.divestitures');
    }

    public function capitalStructuring(){
	    return view('frontend.pages.corporate-advisory.capital-structuring-advisory');
    }

    public function indicationOfValue(){
	    return view('frontend.pages.corporate-advisory.indications-of-value');
    }

    public function projectStrFinance(){
	    return view('frontend.pages.corporate-advisory.project-structured-finance');
    }

    public function transactionSupport(){
	    return view('frontend.pages.corporate-advisory.transaction-support-services');
    }

    public function partnerships(){
	    return view('frontend.pages.partnerships');
    }

    public function contactUs(){
	    return view('frontend.pages.contact-us');
    }

    public function contactUsSubmit(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
                        
        ]);
        
        try {
            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ];
            
            Mail::to('achintya@maccapital.in') // Replace with your recipient email address
                ->send(new ContactFormMail($data));
            Log::info('Contact Us Enquiry Form Email sent successfully to achintya@maccapital.in');
            return redirect()->back()->with('success', 'Your message has been sent successfully. Our team will contact you shortly!')->withFragment('#contact-form');
        } catch (Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an error sending your message. Please try again later.')->withInput()->withFragment('#contact-form');
        }
        
    }

    public function index(){
	    return view('frontend.pages.mutual-funds.index');
    }
    public function basics(){
	    return view('frontend.pages.mutual-funds.basics');
    }

    public function types(){
        return view('frontend.pages.mutual-funds.types');
    }

    public function tools(){
        return view('frontend.pages.mutual-funds.tools');
    }

    public function reasonsToInvest(){
        return view('frontend.pages.mutual-funds.reasons-to-invest');
    }

    public function whatIs(){
        return view('frontend.pages.mutual-funds.basics.what-is');
    }

    public function waysOfInvesting(){
        return view('frontend.pages.mutual-funds.basics.ways-of-investing');
    }

    public function investingBetter(){
        return view('frontend.pages.mutual-funds.basics.investing-better-than-saving');
    }

    public function retirementFunds(){
        return view('frontend.pages.mutual-funds.basics.retirement-funds');
    }

    public function equityFunds(){
        return view('frontend.pages.mutual-funds.basics.equity-funds');
    }

    public function debtFunds(){
        return view('frontend.pages.mutual-funds.basics.debt-funds');
    }

    public function indexFunds(){
        return view('frontend.pages.mutual-funds.basics.index-funds');
    }
    /**Type */
    public function sectoralMutualFunds() {
        return view('frontend.pages.mutual-funds.type-of-mutual-fund.sectoral-mutual-funds');
    }

    public function taxSavingMutualFund() {
        return view('frontend.pages.mutual-funds.type-of-mutual-fund.tax-saving-mutual-fund');
    }

    public function smallCapMutualFunds() {
        return view('frontend.pages.mutual-funds.type-of-mutual-fund.small-cap-mutual-funds');
    }

    public function liquidFunds() {
        return view('frontend.pages.mutual-funds.type-of-mutual-fund.liquid-funds');
    }

    public function typeDebtFunds() {
        return view('frontend.pages.mutual-funds.type-of-mutual-fund.debt-funds');
    }

    public function arbitrageFunds() {
        return view('frontend.pages.mutual-funds.type-of-mutual-fund.arbitrage-funds');
    }

    public function hybridFunds() {
        return view('frontend.pages.mutual-funds.type-of-mutual-fund.hybrid-funds');
    }
    /**tools */
    public function lumpsumCalculator(){
        return view('frontend.pages.mutual-funds.mutual-fund-tools.lumpsum-calculator');
    }

    public function sipCalculator(){
        return view('frontend.pages.mutual-funds.mutual-fund-tools.sip-calculator');
    }

    public function stp(){
        return view('frontend.pages.mutual-funds.mutual-fund-tools.stp');
    }

    public function swp(){
        return view('frontend.pages.mutual-funds.mutual-fund-tools.swp');
    }

    public function goalPlanning(){
        return view('frontend.pages.mutual-funds.mutual-fund-tools.goal-planning');
    }

    public function powerOfCompounding(){
        return view('frontend.pages.mutual-funds.mutual-fund-tools.power-of-compounding');
    }
    /**tools */
    /**reason to invest  */
    

    public function whyInvestInMutualFunds(){
        return view('frontend.pages.mutual-funds.reasons-to-invest.why-invest-in-mutual-funds');
    }

    public function earlyInvestingBenefits(){
        return view('frontend.pages.mutual-funds.reasons-to-invest.early-investing-benefits');
    }

    public function startingAge(){
        return view('frontend.pages.mutual-funds.reasons-to-invest.starting-age');
    }

    public function goldETF(){
        return view('frontend.pages.mutual-funds.reasons-to-invest.gold-etf');
    }

    public function investmentPlans(){
        return view('frontend.pages.mutual-funds.reasons-to-invest.investment-plans');
    }

    public function ppfVsMutualFunds(){
        return view('frontend.pages.mutual-funds.reasons-to-invest.ppf-vs-mutual-funds');
    }

    /**reason to invest  */
    public function smeIpo(){
        return view('frontend.pages.sme-ipos');
    }

    public function otherServices(){
        return view('frontend.pages.other-services.index');
    }

    public function ekycServices(){
        return view('frontend.pages.other-services.ekyc');
    }

    public function insuranceSolution(){
        return view('frontend.pages.other-services.insurance-solution.index');
    }

    public function termInsurance(){
        return view('frontend.pages.other-services.insurance-solution.term-insurance'); 
    }

    public function lifeInsurance(){
        return view('frontend.pages.other-services.insurance-solution.life-insurance'); 
    }

    public function healthInsurance(){
        return view('frontend.pages.other-services.insurance-solution.health-insurance'); 
    }

    public function carBikeInsurance(){
        return view('frontend.pages.other-services.insurance-solution.car-bike-insurance');
    }

    public function businessInsurance(){
        return view('frontend.pages.other-services.insurance-solution.business-insurance');
    }

    public function equityTrading(){
        return view('frontend.pages.other-services.equity-trading.index');
    }

    public function equityTradingVsInvesting(){
        return view('frontend.pages.other-services.equity-trading.vs-investing');
    }

    public function openADematAccount(){
        return view('frontend.pages.other-services.equity-trading.open-demat-account'); 
    }

    public function technicalAndFundamentalAnalysis(){
        return view('frontend.pages.other-services.equity-trading.technical-fundamental-analysis');
    }

    public function sectorsToWatchIn2025(){
        return view('frontend.pages.other-services.equity-trading.sectors-to-watch');
    }

    public function manageRiskInEquityTrading(){
        return view('frontend.pages.other-services.equity-trading.manage-risk'); 
    }

    public function bonds(){
        return view('frontend.pages.other-services.bonds.index');
    }

    public function beginnersGuideToBonds(){
        return view('frontend.pages.other-services.bonds.beginners-guide'); 
    }

    public function governmentBonds(){
        return view('frontend.pages.other-services.bonds.government-bonds');
    }

    public function corporateBonds(){
        return view('frontend.pages.other-services.bonds.corporate-bonds'); 
    }

    public function differenceBetweenBondsAndStocks(){
        return view('frontend.pages.other-services.bonds.difference-bonds-stocks');
    }

    public function yieldMaturityInterestRatesInBonds(){
        return view('frontend.pages.other-services.bonds.yield-maturity-interest-rates');
    }

    public function globalInvestments(){
        return view('frontend.pages.other-services.global-investment.index');
    }

    public function howToInvestInGlobalMarket(){
        return view('frontend.pages.other-services.global-investment.how-to-invest');
    }

    public function topGlobalStockMarkets(){
        return view('frontend.pages.other-services.global-investment.top-global-markets');
    }

    public function riskInGlobalInvestments(){
        return view('frontend.pages.other-services.global-investment.risk');
    }

    public function investingInUSMarkets(){
        return view('frontend.pages.other-services.global-investment.investing-in-us');
    }

    public function taxImplicationsOfGlobalInvestments(){
        return view('frontend.pages.other-services.global-investment.tax-implications');
    }

    public function loans(){
        return view('frontend.pages.other-services.loans.index');
    }

    public function homeLoan(){
        return view('frontend.pages.other-services.loans.home-loan');
    }

    public function businessLoan(){
        return view('frontend.pages.other-services.loans.business-loan');
    }

    public function personalLoan(){
        return view('frontend.pages.other-services.loans.personal-loan');
    }

    public function termLoan(){
        return view('frontend.pages.other-services.loans.term-loan');
    }

    public function carLoan(){
        return view('frontend.pages.other-services.loans.car-loan');
    }

    public function calculator(){
        return view('frontend.pages.calculator.index');
    }

    public function sipCalculators(){
        return view('frontend.pages.calculator.sip-calculator');
    }

    public function lumpsumCalculators(){
        return view('frontend.pages.calculator.lumpsum-calculator');
    }

    public function swpCalculators(){
        return view('frontend.pages.calculator.swp-calculator');
    }

    public function loanCalculators(){
        return view('frontend.pages.calculator.loan-calculator');
    }

    public function fixedDeposit(){
        return view('frontend.pages.fixed-deposit');
    }

    public function eachContactForm(Request $request){
        $current_url = $request->input('currentUrl'); 
        $page_title = $request->input('pageTitle'); 
        $image_file = $request->input('imageFile'); 
        Log::info('CSRF Token:', [
            'session_token' => session()->token(),
            'input_token' => $request->input('_token'),
        ]);
        //$form ='';
        $form ='
        <div class="modal-popup-inner">
        <div class="close-modal"><i class="fa fa-times"></i></div>
            <div class="modal_box">
                <div class="row">
                    <div class="col-lg-7 col-md-7 form_inner">
                        <div class="form_content">
                            <div class="modal-page-title">
                                <h3>'.$page_title.' </h3>
                            </div>
                            <form class="contact-form each-contact" method="post" action="'.route('each-contact.store').'" id="eachcontact" accept-charset="UTF-8" enctype="multipart/form-data">
                                '.csrf_field().'
                                <input type="hidden" name="pagetitle" value="'.$page_title.'"/>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 pe-xl-0 ps-xl-2">
                                        <p>
                                            <label>
                                                <input type="text" name="name" value="" size="40" placeholder="Enter Your Name" id="name" class="feed"/>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 pe-xl-0 ps-xl-2">
                                        <p>
                                            <label> 
                                                <input type="email" name="email" placeholder="Enter Your Email" class="feed" id="email"/>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 pe-xl-0 ps-xl-2">
                                        <p>
                                            <label> 
                                                <input type="text" name="phonenumber" id="phonenumber" placeholder="Enter Your Phone Number" class="feed" maxlength="10" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" />

                                            </label>
                                        </p>
                                    </div>
                                    
                                    
                                    <div class="col-lg-12 col-md-12 pe-xl-0 ps-xl-2">
                                        <p>
                                            <label>
                                                <textarea name="message" cols="20" rows="5" class="wpcf7-form-control wpcf7-textarea" placeholder="Enter Your Message" name="message">
                                                </textarea>
                                            </label>
                                        </p>
                                    </div>
                                </div>
                                
                                <p><button type="submit" class="theme-btn three w-100">Submit</button></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 about_company_inner" 
                    style="background-image: url(' . $image_file . '); 
                        background-size: cover; 
                        background-position: center;">
                    </div>
                </div>
            </div>
        </div>';
        return response()->json([
            'status' => 'success',
            'message' => 'Enquiry created successfully',
            'form' => $form,
        ], 200);
    }

    public function eachContactSubmitForm(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phonenumber' => 'required|digits_between:10,15',
            
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phonenumber'),
            'message' => $request->input('message'),
            'pagetitle' => $request->input('pagetitle'),
        ];
        
        Mail::to('achintya@maccapital.in') 
            ->send(new EachPageFormMail($data));
        Log::info('Contact Us Enquiry Form Email sent successfully to achintya@maccapital.in');
       
        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully, Our team contact you shortly.!',
        ]);
    }
}
