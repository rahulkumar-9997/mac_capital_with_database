<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontHomeController;
use App\Http\Controllers\Frontend\SiteMapController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontHomeController::class, 'home'])->name('home');
Route::get('about-us', [FrontHomeController::class, 'aboutUs'])->name('about-us');
Route::get('financial-services', [FrontHomeController::class, 'financialServices'])->name('financial-services');
Route::group(['prefix'=>'financial-services'], function()
{
    Route::get('multi-facetedstyle', [FrontHomeController::class, 'multiFacetedStyle'])->name('multi-facetedstyle');
    Route::get('capital-raising', [FrontHomeController::class, 'capitalRaising'])->name('capital-raising');
    Route::get('privateequity-placement', [FrontHomeController::class, 'privateEquityPlacement'])->name('privateequity-placement');
    Route::get('internationaldebt-solution', [FrontHomeController::class, 'internationalDebtSolution'])->name('internationaldebt-solution');
    Route::get('internationalstructured-solution', [FrontHomeController::class, 'internationalStructuredSolutions'])->name('internationalstructured-solution');
    Route::get('international-m-and-s-services', [FrontHomeController::class, 'internationalMAandSservices'])->name('international-m-and-s-services');
});

Route::get('corporate-advisory', [FrontHomeController::class, 'corporateAdvisory'])->name('corporate-advisory');
Route::group(['prefix'=>'corporate-advisory'], function()
{
    Route::get('mergers', [FrontHomeController::class, 'mergersAquisitions'])->name('mergers');
    Route::get('divestitures', [FrontHomeController::class, 'divestitures'])->name('divestitures');
    Route::get('capital-structuring', [FrontHomeController::class, 'capitalStructuring'])->name('capital-structuring');
    Route::get('indications-of-value', [FrontHomeController::class, 'indicationOfValue'])->name('indications-of-value');
    Route::get('project-structured-finance', [FrontHomeController::class, 'projectStrFinance'])->name('project-structured-finance');
    Route::get('transaction-support', [FrontHomeController::class, 'transactionSupport'])->name('transaction-support');
});
/** Mutual fund route */
Route::prefix('mutual-funds')->group(function () {
    Route::get('/', [FrontHomeController::class, 'index'])->name('mutual-funds');
    Route::get('/basics', [FrontHomeController::class, 'basics'])->name('basics');
    Route::get('/types', [FrontHomeController::class, 'types'])->name('types');
    Route::get('/tools', [FrontHomeController::class, 'tools'])->name('tools');
    Route::get('/reasons-to-invest', [FrontHomeController::class, 'reasonsToInvest'])->name('reasons-to-invest');

    // Nested routes under 'basics'
    Route::prefix('basics')->group(function () {
        Route::get('/what-is', [FrontHomeController::class, 'whatIs'])->name('basics.what-is');
        Route::get('/ways-of-investing', [FrontHomeController::class, 'waysOfInvesting'])->name('basics.ways-of-investing');
        Route::get('/investing-better-than-saving', [FrontHomeController::class, 'investingBetter'])->name('basics.investing-better-than-saving');
        Route::get('/retirement-funds', [FrontHomeController::class, 'retirementFunds'])->name('basics.retirement-funds');
        Route::get('/equity-funds', [FrontHomeController::class, 'equityFunds'])->name('basics.equity-funds');
        Route::get('/debt-funds', [FrontHomeController::class, 'debtFunds'])->name('basics.debt-funds');
        Route::get('/index-funds', [FrontHomeController::class, 'indexFunds'])->name('basics.index-funds');
    });

    // Nested routes under 'types'
    Route::prefix('types')->group(function () {
        Route::get('/sectoral-mutual-funds', [FrontHomeController::class, 'sectoralMutualFunds'])->name('types.sectoral-mutual-funds');
        Route::get('/tax-saving-mutual-fund', [FrontHomeController::class, 'taxSavingMutualFund'])->name('types.tax-saving-mutual-fund');
        Route::get('/small-cap-mutual-funds', [FrontHomeController::class, 'smallCapMutualFunds'])->name('types.small-cap-mutual-funds');
        Route::get('/liquid-funds', [FrontHomeController::class, 'liquidFunds'])->name('types.liquid-funds');
        Route::get('/debt-funds', [FrontHomeController::class, 'typeDebtFunds'])->name('types.debt-funds');
        Route::get('/arbitrage-funds', [FrontHomeController::class, 'arbitrageFunds'])->name('types.arbitrage-funds');
        Route::get('/hybrid-funds', [FrontHomeController::class, 'hybridFunds'])->name('types.hybrid-funds');
    });

    // Nested routes under 'tools'
    Route::prefix('tools')->group(function () {
        Route::get('/lumpsum-calculator', [FrontHomeController::class, 'lumpsumCalculator'])->name('tools.lumpsum-calculator');
        Route::get('/sip-calculator', [FrontHomeController::class, 'sipCalculator'])->name('tools.sip-calculator');
        Route::get('/stp', [FrontHomeController::class, 'stp'])->name('tools.stp');
        Route::get('/swp', [FrontHomeController::class, 'swp'])->name('tools.swp');
        Route::get('/goal-planning', [FrontHomeController::class, 'goalPlanning'])->name('tools.goal-planning');
        Route::get('/power-of-compounding', [FrontHomeController::class, 'powerOfCompounding'])->name('tools.power-of-compounding');
    });

    // Nested routes under 'reasons-to-invest'
    Route::prefix('reasons-to-invest')->group(function () {
        Route::get('/why-invest-in-mutual-funds', [FrontHomeController::class, 'whyInvestInMutualFunds'])->name('reasons-to-invest.why-invest-in-mutual-funds');
        Route::get('/early-investing-benefits', [FrontHomeController::class, 'earlyInvestingBenefits'])->name('reasons-to-invest.early-investing-benefits');
        Route::get('/starting-age', [FrontHomeController::class, 'startingAge'])->name('reasons-to-invest.starting-age');
        Route::get('/gold-etf', [FrontHomeController::class, 'goldETF'])->name('reasons-to-invest.gold-etf');
        Route::get('/investment-plans', [FrontHomeController::class, 'investmentPlans'])->name('reasons-to-invest.investment-plans');
        Route::get('/ppf-vs-mutual-funds', [FrontHomeController::class, 'ppfVsMutualFunds'])->name('reasons-to-invest.ppf-vs-mutual-funds');
    });
});
Route::get('sme-ipos', [FrontHomeController::class, 'smeIpo'])->name('sme-ipos');
Route::prefix('other-services')->group(function () {
    Route::get('/', [FrontHomeController::class, 'otherServices'])->name('other-services');
    Route::get('/ekyc', [FrontHomeController::class, 'ekycServices'])->name('other-services.ekyc');
    Route::get('/insurance-solution', [FrontHomeController::class, 'insuranceSolution'])->name('other-services.insurance-solution');
    Route::prefix('insurance-solution')->group(function () {
        Route::get('/term-insurance', [FrontHomeController::class, 'termInsurance'])->name('other-services.insurance-solution.term-insurance');
        Route::get('/life-insurance', [FrontHomeController::class, 'lifeInsurance'])->name('other-services.insurance-solution.life-insurance');
        Route::get('/health-insurance', [FrontHomeController::class, 'healthInsurance'])->name('other-services.insurance-solution.health-insurance');
        Route::get('/car-and-bike-insurance', [FrontHomeController::class, 'carBikeInsurance'])->name('other-services.insurance-solution.car-bike-insurance');
        Route::get('/business-insurance', [FrontHomeController::class, 'businessInsurance'])->name('other-services.insurance-solution.business-insurance');
    });

    // Other service routes
    Route::get('/equity-trading', [FrontHomeController::class, 'equityTrading'])->name('other-services.equity-trading');
    Route::prefix('equity-trading')->group(function () {
        Route::get('/equity-trading-vs-investing', [FrontHomeController::class, 'equityTradingVsInvesting'])->name('other-services.equity-trading.vs-investing');
        Route::get('/open-a-demat-account', [FrontHomeController::class, 'openADematAccount'])->name('other-services.equity-trading.open-demat-account');
        Route::get('/technical-and-fundamental-analysis', [FrontHomeController::class, 'technicalAndFundamentalAnalysis'])->name('other-services.equity-trading.technical-fundamental-analysis');
        Route::get('/sectors-to-watch-in-2025', [FrontHomeController::class, 'sectorsToWatchIn2025'])->name('other-services.equity-trading.sectors-to-watch');
        Route::get('/manage-risk-in-equity-trading', [FrontHomeController::class, 'manageRiskInEquityTrading'])->name('other-services.equity-trading.manage-risk');
    });
    Route::get('/bonds', [FrontHomeController::class, 'bonds'])->name('other-services.bonds');
    Route::prefix('bonds')->group(function () {
        Route::get('/beginners-guide-to-bonds', [FrontHomeController::class, 'beginnersGuideToBonds'])->name('other-services.bonds.beginners-guide');
        Route::get('/government-bonds', [FrontHomeController::class, 'governmentBonds'])->name('other-services.bonds.government-bonds');
        Route::get('/corporate-bonds', [FrontHomeController::class, 'corporateBonds'])->name('other-services.bonds.corporate-bonds');
        Route::get('/difference-between-bonds-and-stocks', [FrontHomeController::class, 'differenceBetweenBondsAndStocks'])->name('other-services.bonds.difference-bonds-stocks');
        Route::get('/yield-maturity-interest-rates-in-bonds', [FrontHomeController::class, 'yieldMaturityInterestRatesInBonds'])->name('other-services.bonds.yield-maturity-interest-rates');
    });
    Route::get('/global-investments', [FrontHomeController::class, 'globalInvestments'])->name('other-services.global-investments');
    Route::prefix('global-investments')->group(function () {
        Route::get('/how-to-invest-in-global-market', [FrontHomeController::class, 'howToInvestInGlobalMarket'])->name('other-services.global-investments.how-to-invest');
        Route::get('/top-global-stock-markets', [FrontHomeController::class, 'topGlobalStockMarkets'])->name('other-services.global-investments.top-global-markets');
        Route::get('/risk-in-global-investments', [FrontHomeController::class, 'riskInGlobalInvestments'])->name('other-services.global-investments.risk');
        Route::get('/investing-in-us-markets', [FrontHomeController::class, 'investingInUSMarkets'])->name('other-services.global-investments.investing-in-us');
        Route::get('/tax-implications-of-global-investments', [FrontHomeController::class, 'taxImplicationsOfGlobalInvestments'])->name('other-services.global-investments.tax-implications');
    });
    Route::get('/loans', [FrontHomeController::class, 'loans'])->name('other-services.loans');
    Route::prefix('loans')->group(function () {
        Route::get('/home-loan', [FrontHomeController::class, 'homeLoan'])->name('other-services.loans.home-loan');
        Route::get('/business-loan', [FrontHomeController::class, 'businessLoan'])->name('other-services.loans.business-loan');
        Route::get('/personal-loan', [FrontHomeController::class, 'personalLoan'])->name('other-services.loans.personal-loan');
        Route::get('/term-loan', [FrontHomeController::class, 'termLoan'])->name('other-services.loans.term-loan');
        Route::get('/car-loan', [FrontHomeController::class, 'carLoan'])->name('other-services.loans.car-loan');
    });
});


Route::get('partnerships', [FrontHomeController::class, 'partnerships'])->name('partnerships');
Route::get('/calculators', [FrontHomeController::class, 'calculator'])->name('calculators');
Route::prefix('calculators')->group(function () {
    Route::get('/sip-calculator', [FrontHomeController::class, 'sipCalculators'])->name('calculators.sip-calculator');
    Route::get('/lumpsum-calculator', [FrontHomeController::class, 'lumpsumCalculators'])->name('calculators.lumpsum-calculator');
    Route::get('/swp-calculator', [FrontHomeController::class, 'swpCalculators'])->name('calculators.swp-calculator');
    Route::get('/loan-emi-calculator', [FrontHomeController::class, 'loanCalculators'])->name('calculators.loan-emi-calculator');
});
Route::get('contact-us', [FrontHomeController::class, 'contactUs'])->name('contact-us');
Route::POST('contact-us/store', [FrontHomeController::class, 'contactUsSubmit'])->name('contact-us.store');

Route::post('each-contact', [FrontHomeController::class, 'eachContactForm'])->name('each-contact');
Route::POST('each-contact/store', [FrontHomeController::class, 'eachContactSubmitForm'])->name('each-contact.store');
Route::get('fixed-deposit', [FrontHomeController::class, 'fixedDeposit'])->name('fixed-deposit');
Route::get('sitemap.xml', [SiteMapController::class, 'index'])->name('sitemap');
