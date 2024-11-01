<?php
/*
* Plugin Name: Show Full Date for a Day's Name 
* Description: Add the full calendar date in your posts easily for many U.S. Federal and Hawaiian State holidays and cultural observances with just the name of the holiday.
* Version: 1.3
* Author: David Nickles
* Author URI: https://www.waikikiaquarium.org
* License: GNU General Public License (GPL) version 3
*/

// WP Shortcode to display the date for the specified day's name on any page or post.
	function fd4n_get_full_date_from_name( $atts, $content = null ) {
	
		$atts = shortcode_atts( array(
			"name" => "today",
			"date" => "actual"
		), $atts );

		$sel_date_name = strtolower($atts["name"]);
		$sel_date_desc = "";
		$public_holiday_weekend_possibility = false;

		switch ($sel_date_name) {
			case "newyearsday":
				$sel_date_desc = "1st January";
				$public_holiday_weekend_possibility = true;
				break;
			case "nextnewyearsday":
				$sel_date_desc = "1st January next year";
				$public_holiday_weekend_possibility = true;
				break;
			case "martinlutherkingjrday":
				$sel_date_desc = "third Monday of January";
				break;
			case "valentinesday":
				$sel_date_desc = "14th February";
				break;
			case "presidentsday":
			case "washingtonsbirthday":
				$sel_date_desc = "third Monday of February";
				break;
			case "girlsday":
			case "hinamatsuri":
				$sel_date_desc = "3rd March";
				break;
			case "saintpatricksday":
				$sel_date_desc = "17th March";
				break;
			case "waq-anniversary":
				$sel_date_desc = "19th March";
				break;
			case "princekuhioday":
				$sel_date_desc = "26th March";
				$public_holiday_weekend_possibility = true;
				break;
			case "goodfriday":
				$sel_date_desc = date_create()
				->setTimestamp(easter_date())
				->sub(new DateInterval("P2D"))
				->format("d M Y");
				break;
			case "easter":
				$sel_date_desc = date_create()
				->setTimestamp(easter_date())
				->format("d M Y");
				break;
			case "arborday":
				$sel_date_desc = "last Friday of April";
				break;
			case "mayday":
			case "leiday":
				$sel_date_desc = "1st May";
				break;
			case "boysday":
			case "tangonosekku":
				$sel_date_desc = "5th May";
				break;
			case "mothersday":
				$sel_date_desc = "second Sunday of May";
				break;
			case "memorialday":
				$sel_date_desc = "last Monday of May";
				break;
			case "kamehamehaday":
				$sel_date_desc = "11th June";
				$public_holiday_weekend_possibility = true;
				break;
			case "fathersday":
				$sel_date_desc = "third Sunday of June";
				break;
			case "juneteenth":
				$sel_date_desc = "19th June";
				break;
			case "independenceday":
				$sel_date_desc = "4th July";
				$public_holiday_weekend_possibility = true;
				break;
			case "tanabatafestival":
				$sel_date_desc = "7th July";
				break;
			case "hawaiiadmissionday":
			case "statehoodday":
				$sel_date_desc = "third Friday of August";
				break;
			case "laborday":
				$sel_date_desc = "first Monday of September";
				break;
			case "columbusday":
			case "discoverersday":
				$sel_date_desc = "second Monday of October";
				break;
			case "halloween":
				$sel_date_desc = "31st October";
				break;
			case "electionday":
				$sel_date_desc = ((new DateTime("first Tuesday of November"))->format("j") == 1) ? "second Tuesday of November" : "first Tuesday of November";
				break;
			case "veteransday":
				$sel_date_desc = "11th November";
				$public_holiday_weekend_possibility = true;
				break;
			case "thanksgiving":
				$sel_date_desc = "fourth Thursday of November";
				break;
			case "honolulumarathon":
				$sel_date_desc = "second Sunday of December";
				break;
			case "christmaseve":
				$sel_date_desc = "24th December";
				break;
			case "christmas":
			case "xmas":
				$sel_date_desc = "25th December";
				$public_holiday_weekend_possibility = true;
				break;
			default:
				$sel_date_desc =  "today";
		}
		
        $holiDate = new DateTime($sel_date_desc);
        $suffix = "";
		// compute federal and state holidays that fall on the weekend
		if((strtolower($atts["date"]) == "observed") && $public_holiday_weekend_possibility) { 
			// Numeric representation of the day of the week
			// Example values: 0 (for Sunday) through 6 (for Saturday)
			switch ($holiDate->format('w')) {
				case 6:
					$holiDate->sub(new DateInterval("P1D"));
					$suffix = " (Observed)";
					break;
				case 0:
					$holiDate->add(new DateInterval("P1D"));
					$suffix = " (Observed)";
					break;
				default:
					$suffix = " (Actual)";
			}
		}
		return ($holiDate->format('l, F j, Y') . $suffix);
	}
	add_shortcode("showdatefor", "fd4n_get_full_date_from_name");
?>