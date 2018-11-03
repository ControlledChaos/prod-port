<?php
/**
 * SCallback for the Schema organization type field.
 *
 * @package    Production_Portfolios
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@productionportfolios.com>
 */

namespace CC_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$types = [

	// First option save null.
	null          => __( 'Select one&hellip;', 'prod-port' ),
	'Airline'     => __( 'Airline', 'prod-port' ),
	'Corporation' => __( 'Corporation', 'prod-port' ),

	// Educational Organizations.
	'EducationalOrganization' => __( 'Educational Organization', 'prod-port' ),
		'CollegeOrUniversity' => __( '— College or University', 'prod-port' ),
		'ElementarySchool'    => __( '— Elementary School', 'prod-port' ),
		'HighSchool'          => __( '— High School', 'prod-port' ),
		'MiddleSchool'        => __( '— Middle School', 'prod-port' ),
		'Preschool'           => __( '— Preschool', 'prod-port' ),
		'School'              => __( '— School', 'prod-port' ),

	'GovernmentOrganization'  => __( 'Government Organization', 'prod-port' ),

	// Local Businesses.
	'LocalBusiness' => __( 'Local Business', 'prod-port' ),
		'AnimalShelter' => __( '— Animal Shelter', 'prod-port' ),

		// Automotive Businesses.
		'AutomotiveBusiness' => __( '— Automotive Business', 'prod-port' ),
			'AutoBodyShop'     => __( '—— Auto Body Shop', 'prod-port' ),
			'AutoDealer'       => __( '—— Auto Dealer', 'prod-port' ),
			'AutoPartsStore'   => __( '—— Auto Parts Store', 'prod-port' ),
			'AutoRental'       => __( '—— Auto Rental', 'prod-port' ),
			'AutoRepair'       => __( '—— Auto Repair', 'prod-port' ),
			'AutoWash'         => __( '—— Auto Wash', 'prod-port' ),
			'GasStation'       => __( '—— Gas Station', 'prod-port' ),
			'MotorcycleDealer' => __( '—— Motorcycle Dealer', 'prod-port' ),
			'MotorcycleRepair' => __( '—— Motorcycle Repair', 'prod-port' ),

		'ChildCare'            => __( '— Child Care', 'prod-port' ),
		'Dentist'              => __( '— Dentist', 'prod-port' ),
		'DryCleaningOrLaundry' => __( '— Dry Cleaning or Laundry', 'prod-port' ),

		// Emergency Services.
		'EmergencyService' => __( '— Emergency Service', 'prod-port' ),
			'FireStation'   => __( '—— Fire Station', 'prod-port' ),
			'Hospital'      => __( '—— Hospital', 'prod-port' ),
			'PoliceStation' => __( '—— Police Station', 'prod-port' ),

		'EmploymentAgency' => __( '— Employment Agency', 'prod-port' ),

		// Entertainment Businesses.
		'EntertainmentBusiness' => __( '— Entertainment Business', 'prod-port' ),
			'AdultEntertainment' => __( '—— Adult Entertainment', 'prod-port' ),
			'AmusementPark'      => __( '—— Amusement Park', 'prod-port' ),
			'ArtGallery'         => __( '—— Art Gallery', 'prod-port' ),
			'Casino'             => __( '—— Casino', 'prod-port' ),
			'ComedyClub'         => __( '—— Comedy Club', 'prod-port' ),
			'MovieTheater'       => __( '—— Movie Theater', 'prod-port' ),
			'NightClub'          => __( '—— Night Club', 'prod-port' ),

		// Financial Services.
		'FinancialService' => __( '— Financial Service', 'prod-port' ),
			'AccountingService' => __( '—— Accounting Service', 'prod-port' ),
			'AutomatedTeller'   => __( '—— Automated Teller', 'prod-port' ),
			'BankOrCreditUnion' => __( '—— Bank or Credit Union', 'prod-port' ),
			'InsuranceAgency'   => __( '—— Insurance Agency', 'prod-port' ),

		// Food Establishments.
		'FoodEstablishment' => __( '— Food Establishment', 'prod-port' ),
			'Bakery'             => __( '—— Bakery', 'prod-port' ),
			'BarOrPub'           => __( '—— Bar or Pub', 'prod-port' ),
			'Brewery'            => __( '—— Brewery', 'prod-port' ),
			'CafeOrCoffeeShop'   => __( '—— Cafe or Coffee Shop', 'prod-port' ),
			'FastFoodRestaurant' => __( '—— Fast Food Restaurant', 'prod-port' ),
			'IceCreamShop'       => __( '—— Ice Cream Shop', 'prod-port' ),
			'Restaurant'         => __( '—— Restaurant', 'prod-port' ),
			'Winery'             => __( '—— Winery', 'prod-port' ),

		// Government Offices.
		'GovernmentOffice' => __( '— Government Office', 'prod-port' ),
			'PostOffice' => __( '—— Post Office', 'prod-port' ),

		// Health and Beauty Businesses.
		'HealthAndBeautyBusiness' => __( '— Health and Beauty Business', 'prod-port' ),
			'BeautySalon'  => __( '—— Beauty Salon', 'prod-port' ),
			'DaySpa'       => __( '—— Day Spa', 'prod-port' ),
			'HairSalon'    => __( '—— Hair Salon', 'prod-port' ),
			'HealthClub'   => __( '—— Health Club', 'prod-port' ),
			'NailSalon'    => __( '—— Nail Salon', 'prod-port' ),
			'TattooParlor' => __( '—— Tattoo Parlor', 'prod-port' ),

		// Home and Construction Businesses.
		'HomeAndConstructionBusiness' => __( '— Home and Construction Business', 'prod-port' ),
			'Electrician'       => __( '—— Electrician', 'prod-port' ),
			'GeneralContractor' => __( '—— General Contractor', 'prod-port' ),
			'HVACBusiness'      => __( '—— HVAC Business', 'prod-port' ),
			'HousePainter'      => __( '—— House Painter', 'prod-port' ),
			'Locksmith'         => __( '—— Locksmith', 'prod-port' ),
			'MovingCompany'     => __( '—— MovingCompany', 'prod-port' ),
			'Plumber'           => __( '—— Plumber', 'prod-port' ),
			'RoofingContractor' => __( '—— Roofing Contractor', 'prod-port' ),

		'InternetCafe' => __( '— Internet Cafe', 'prod-port' ),

		// Legal Services.
		'LegalService' => __( '— Legal Service', 'prod-port' ),
			'Attorney' => __( '—— Attorney', 'prod-port' ),
			'Notary'   => __( '—— Notary', 'prod-port' ),

		'Library' => __( '— Library', 'prod-port' ),

		// Lodging Businesses.
		'LodgingBusiness' => __( '— Lodging Business', 'prod-port' ),
			'BedAndBreakfast' => __( '—— Bed and Breakfast', 'prod-port' ),
			'Campground'      => __( '—— Campground', 'prod-port' ),
			'Hostel'          => __( '—— Hostel', 'prod-port' ),
			'Hotel'           => __( '—— Hotel', 'prod-port' ),
			'Motel'           => __( '—— Motel', 'prod-port' ),
			'Resort'          => __( '—— Resort', 'prod-port' ),

		'ProfessionalService' => __( '— Professional Service', 'prod-port' ),
		'RadioStation'        => __( '— Radio Station', 'prod-port' ),
		'RealEstateAgent'     => __( '— Real Estate Agent', 'prod-port' ),
		'RecyclingCenter'     => __( '— Recycling Center', 'prod-port' ),
		'SelfStorage'         => __( '— Self Storage', 'prod-port' ),
		'ShoppingCenter'      => __( '— Shopping Center', 'prod-port' ),

		// Sports Activity Locations.
		'SportsActivityLocation' => __( '— Sports Activity Location', 'prod-port' ),
			'BowlingAlley'       => __( '—— Bowling Alley', 'prod-port' ),
			'ExerciseGym'        => __( '—— Exercise Gym', 'prod-port' ),
			'GolfCourse'         => __( '—— Golf Course', 'prod-port' ),
			'HealthClub'         => __( '—— Health Club', 'prod-port' ),
			'PublicSwimmingPool' => __( '—— Public Swimming Pool', 'prod-port' ),
			'SkiResort'          => __( '—— Ski Resort', 'prod-port' ),
			'SportsClub'         => __( '—— Sports Club', 'prod-port' ),
			'StadiumOrArena'     => __( '—— Stadium or Arena', 'prod-port' ),
			'TennisComplex'      => __( '—— Tennis Complex', 'prod-port' ),

		// Store types.
		'Store' => __( '— Store', 'prod-port' ),
			'AutoPartsStore'      => __( '—— Auto Parts Store', 'prod-port' ),
			'BikeStore'           => __( '—— Bike Store', 'prod-port' ),
			'BookStore'           => __( '—— Book Store', 'prod-port' ),
			'ClothingStore'       => __( '—— Clothing Store', 'prod-port' ),
			'ComputerStore'       => __( '—— Computer Store', 'prod-port' ),
			'ConvenienceStore'    => __( '—— Convenience Store', 'prod-port' ),
			'DepartmentStore'     => __( '—— Department Store', 'prod-port' ),
			'ElectronicsStore'    => __( '—— Electronics Store', 'prod-port' ),
			'Florist'             => __( '—— Florist', 'prod-port' ),
			'FurnitureStore'      => __( '—— Furniture Store', 'prod-port' ),
			'GardenStore'         => __( '—— Garden Store', 'prod-port' ),
			'GroceryStore'        => __( '—— Grocery Store', 'prod-port' ),
			'HardwareStore'       => __( '—— Hardware Store', 'prod-port' ),
			'HobbyShop'           => __( '—— Hobby Shop', 'prod-port' ),
			'HomeGoodsStore'      => __( '—— Home Goods Store', 'prod-port' ),
			'JewelryStore'        => __( '—— Jewelry Store', 'prod-port' ),
			'LiquorStore'         => __( '—— Liquor Store', 'prod-port' ),
			'MensClothingStore'   => __( '—— Mens Clothing Store', 'prod-port' ),
			'MobilePhoneStore'    => __( '—— Mobile Phone Store', 'prod-port' ),
			'MovieRentalStore'    => __( '—— Movie Rental Store', 'prod-port' ),
			'MusicStore'          => __( '—— Music Store', 'prod-port' ),
			'OfficeEquipmentStore'=> __( '—— Office Equipment Store', 'prod-port' ),
			'OutletStore'         => __( '—— Outlet Store', 'prod-port' ),
			'PawnShop'            => __( '—— Pawn Shop', 'prod-port' ),
			'PetStore'            => __( '—— Pet Store', 'prod-port' ),
			'ShoeStore'           => __( '—— Shoe Store', 'prod-port' ),
			'SportingGoodsStore'  => __( '—— Sporting Goods Store', 'prod-port' ),
			'TireShop'            => __( '—— Tire Shop', 'prod-port' ),
			'ToyStore'            => __( '—— Toy Store', 'prod-port' ),
			'WholesaleStore'      => __( '—— Wholesale Store', 'prod-port' ),

		'TelevisionStation'        => __( '— Television Station', 'prod-port' ),
		'TouristInformationCenter' => __( '— Tourist Information Center', 'prod-port' ),
		'TravelAgency'             => __( '— Travel Agency', 'prod-port' ),

	'MedicalOrganization' => __( 'Medical Organization', 'prod-port' ),
	'NGO'                 => __( 'NGO (Non-Governmental Organization', 'prod-port' ),
	'PerformingGroup'     => __( 'Performing Group', 'prod-port' ),
	'SportsOrganization'  => __( 'Sports Organization', 'prod-port' )
];

$options = get_option( 'schema_org_type' );

$html = '<p><select id="schema_org_type" name="schema_org_type">';

foreach( $types as $type => $value ) {

	$selected = ( $options == $type ) ? 'selected="' . esc_attr( 'selected' ) . '"' : '';

	$html .= '<option value="' . esc_attr( $type ) . '" ' . $selected . '>' . esc_html( $value ) . '</option>';

}

$html .= '</select>';
$html .= sprintf(
	'<label for="schema_org_type"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
	$args[0],
	esc_attr( esc_url( 'https://schema.org/docs/full.html#C.Organization' ) ),
	esc_attr( __( 'Read documentation for organization types', 'prod-port' ) )
);
$html .= '</p>';

echo $html;