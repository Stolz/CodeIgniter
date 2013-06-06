<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//to-do delete this file is you don't plan to use Datamapper ORM

/**
 * Template DataMapper Model
 *
 * Use this basic model as a template for creating new models.
 * It is not recommended that you include this file with your application,
 * especially if you use a Template library (as the classes may collide).
 *
 * To use:
 * 1) Copy this file to the lowercase name of your new model.
 * 2) Find-and-replace (case-sensitive) 'Template' with 'Your_model'
 * 3) Find-and-replace (case-sensitive) 'template' with 'your_model'
 * 4) Find-and-replace (case-sensitive) 'templates' with 'your_models'
 * 5) Edit the file as desired.
 *
 * @license		MIT License
 * @category	Models
 * @author		Phil DeJarnett
 * @link		http://www.overzealous.com
 */
class Template extends DataMapper {

	// Uncomment and edit these two if the class has a model name that
	//   doesn't convert properly using the inflector_helper.
	// public $model = 'template';
	// public $table = 'templates';

	// You can override the database connections with this option
	// $db_params = 'db_config_name';

	// --------------------------------------------------------------------
	// Relationships
	//   Configure your relationships below
	// --------------------------------------------------------------------

	// Insert related models that Template can have just one of.
	public $has_one = array();

	// Insert related models that Template can have more than one of.
	public $has_many = array();

	/* Relationship Examples
	 * For normal relationships, simply add the model name (LOWERCASE) to the array:
	 *   $has_one = array('user'); // Template has one User
	 *
	 * For complex relationships, such as having a Creator and Editor for
	 * Template, use this form:
	 *   $has_one = array(
	 *   	'creator' => array(
	 *   		'class' => 'user',
	 *   		'other_field' => 'created_template'
	 *   	)
	 *   );
	 *
	 * Don't forget to add 'created_template' to User, with class set to
	 * 'template', and the other_field set to 'creator'!
	 *
	 */

	// --------------------------------------------------------------------
	// Validation
	//   Add validation requirements, such as 'required', for your fields.
	// --------------------------------------------------------------------
	//Gettext is only abailable on run-time so validation labels can't be initializate here,__construct() must be used instead
	public $validation = array(
		'example' => array(
			// example is required, and cannot be more than 120 characters long.
			'rules' => array('required', 'max_length' => 120),
			'label' => 'Example'
		)
	);
	/* Avaliable rules from CI

	Rule			Parameter	Description
	required		No		Returns FALSE if the form element is empty.
	matches			Yes		Returns FALSE if the form element does not match the one in the parameter.
	differs			Yes		Returns FALSE if the form element does not differ from the one in the parameter.
	is_unique		Yes		Returns FALSE if the form element is not unique to the table and field name in the parameter.
	min_length		Yes		Returns FALSE if the form element is shorter then the parameter value.
	max_length		Yes		Returns FALSE if the form element is longer then the parameter value.
	exact_length	Yes		Returns FALSE if the form element is not exactly the parameter value.
	greater_than	Yes		Returns FALSE if the form element is less than the parameter value or not numeric.
	greater_than_equal_to Yes Returns FALSE if the form element is less than or equal to the parameter value or not numeric.
	less_than		Yes		Returns FALSE if the form element is greater than the parameter value or not numeric.
	less_than_equal_to	Yes	Returns FALSE if the form element is greater than or equal to the parameter value or not numeric.
	alpha			No		Returns FALSE if the form element contains anything other than alphabetical characters.
	alpha_numeric	No		Returns FALSE if the form element contains anything other than alpha-numeric characters.
	alpha_dash		No		Returns FALSE if the form element contains anything other than alpha-numeric characters, underscores or dashes.
	numeric			No		Returns FALSE if the form element contains anything other than numeric characters: Only numers in format 1 or +1 or -1 or 1.2 or +1.2 or -1.2
	is_numeric		No		Returns FALSE if the form element contains anything other than numeric stings: Anything that evals to TRUE in native PHP is_numeric() function such 1234 or 0x539 or 0b10100111001 or 1337e0
	integer			No		Returns FALSE if the form element contains anything other than an integer.
	decimal			Yes		Returns FALSE if the form element is not exactly the parameter value.
	is_natural		No		Returns FALSE if the form element contains anything other than a natural number: 0, 1, 2, 3, etc.
	is_natural_no_zero	No	Returns FALSE if the form element contains anything other than a natural number, but not zero: 1, 2, 3, etc.
	valid_email		No		Returns FALSE if the form element does not contain a valid email address.
	valid_emails	No		Returns FALSE if any value provided in a comma separated list is not a valid email.
	valid_ip		No		Returns FALSE if the supplied IP is not valid.
	valid_base64	No		Returns FALSE if the supplied string contains anything other than valid Base64 characters.
	valid_url		No		Returns FALSE if the supplied string is not a valid URL.
	regex_match		Yes		Returns FALSE if the form element does not match the regular expression in the parameter.

	Avaliable rules from DataMaper for columns

	Rule			Parameter	Description
	always_validate	No			Does nothing, but notifies the validation routine to always run, even if the field is empty.
	alpha_dash_dot	No			Returns FALSE if the property contains anything other than alpha-numeric characters, underscores, dashes or full-stops.
	alpha_slash_dot	No			Returns FALSE if the property contains anything other than alpha-numeric characters, underscores, dashes, forward slashes or full-stops.
	boolean			No			Forces the propert to be TRUE or FALSE, using PHP's built-in boolean conversion.
	unique			No			Returns FALSE if the property is not unique.
	unique_pair		Yes			Returns FALSE if the property, paired with another property, is not unique.
	min_size		Yes			Returns FALSE if the property is less than the specified size.
	max_size		Yes			Returns FALSE if the property is greater than the specified size.
	min_date		Yes			Returns FALSE if the property is less than the specified date.
	max_date		Yes			Returns FALSE if the property is greater than the specified date.
	valid_date		No			Returns FALSE if the property is not a valid date.
	valid_date_group			Yes	Returns FALSE if the property, grouped with other properties, is not a valid date.
	valid_match		Yes			Returns FALSE if the property does not match one of the specified array values.

	Avaliable rules from DataMaper for relationships

	required		No			Returns FALSE if the object is not being saved with a relationship and one does not already exist.
	min_size		Yes			Returns FALSE if the number of relationships is less than the specified size.
	max_size		Yes			Returns FALSE if the number of relationships is greater than the specified size.

	// --------------------------------------------------------------------
	// Default Ordering
	//   Uncomment this to always sort by 'name', then by
	//   id descending (unless overridden)
	// --------------------------------------------------------------------

	//public  $default_order_by = array('name', 'id' => 'desc');

	// --------------------------------------------------------------------




	// --------------------------------------------------------------------
	// Auto populate
	// By default, DataMapper does not auto populate your related objects when you first access them
	// If you'd prefer your related objects are auto populated when you first access them,
	// you can do so by setting here the $auto_populate_has_many and $auto_populate_has_one class variables to TRUE or by setting them to TRUE in the DataMapper Configuration.
	// Obviously these will auto populate their respective relation type.
	//The only downside of auto populating is that it will populate with all related records. So, looking at the above example, if we had a hundred thousand users related to Australia, all of those users would have to be read from the Database and loaded into memory, which is not good for performance, and why it is recommended you stick to manually populating with sensibly defined query clauses.
	// --------------------------------------------------------------------

	$auto_populate_has_many = TRUE;
	$auto_populate_has_one = TRUE;

	// --------------------------------------------------------------------

	/**
	 * Constructor: calls parent constructor
	 */
    function __construct($id = NULL)
	{
		parent::__construct($id);
    }

	// --------------------------------------------------------------------
	// Post Model Initialisation
	//   Add your own custom initialisation code to the Model
	// The parameter indicates if the current config was loaded from cache or not
	// --------------------------------------------------------------------
	function post_model_init($from_cache = FALSE)
	{
	}

	// --------------------------------------------------------------------
	// Custom Methods
	//   Add your own custom methods here to enhance the model.
	// --------------------------------------------------------------------

	/* Example Custom Method
	function get_open_templates()
	{
		return $this->where('status <>', 'closed')->get();
	}
	*/

	// --------------------------------------------------------------------
	// Custom Validation Rules
	//   Add custom validation rules for this model here.
	// --------------------------------------------------------------------

	/* Example Rule
	function _convert_written_numbers($field, $parameter)
	{
	 	$nums = array('one' => 1, 'two' => 2, 'three' => 3);
	 	if(in_array($this->{$field}, $nums))
		{
			$this->{$field} = $nums[$this->{$field}];
	 	}
	}
	*/
}

/* End of file template.php */
/* Location: ./application/models/template.php */
