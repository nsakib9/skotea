<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;

    public $appends = ['co_ordinates'];

    /**
     * Get Formatted Co ordinates
     *
     */
    public function getCoOrdinatesAttribute()
    {
    	$formatted_coordinates = [];
    	$all_coordinates = explode('((', $this->attributes['coordinates']);
    	$coordinate_data = str_replace(['))'], '', $all_coordinates[1]);
    	$coordinate_data = explode(',', $coordinate_data);
    	$i = 0;
    	foreach ($coordinate_data as $coords) {
            $coord = explode(' ', trim($coords));
    		$return_value[$i]['lat'] = (float) $coord[0];
    		$return_value[$i]['lng'] = (float) $coord[1];
            $i++;
		}
		$formatted_coordinates[0] = $return_value;

		return $formatted_coordinates;
    }

    /**
     * Scope to get Active records Only
     *
     */
    public function scopeActive($query)
    {
        return $query->whereStatus('Active');
    }

    /**
     * Filter to locations containing a specific geographical point.
     */
    public function scopeContainingPoint($query, $latitude, $longitude)
    {
        return $query->whereRaw('
            ST_WITHIN(
                POINT(?, ?),
                ST_GeomFromText(coordinates)
            )
        ', [$latitude, $longitude]);
    }
}
