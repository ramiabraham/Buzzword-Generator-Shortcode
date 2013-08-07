<?php
/*
Plugin Name: Bullshit Generator
Plugin URI: http://ramiabraham.com/buzzword-generator-shortcode/
Description: Makes marketing bullshit based on the old dack.com arrays
Version: 1.0
Author: ramiabraham
Contributors: ramiabraham
Tags: shortcode, marketing, bs, lies, arrays, dack
License: GPLv2 or later
Tested up to: 3.6
Author URI: http://rami.nu
*/

/*  Copyright 2013 Rami Abraham

	Props to dack.com for the original array; check it out here: http://dack.com/web/bullshit.html
	
	See an entire website powered by these arrays: https://github.com/ramiabraham/marketing-website-generator

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; version 2 of the License (GPL v2) only.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


if ( ! function_exists ('bg_make_bullshit')) {

function bg_make_bullshit() {

	$header_banner_verb_one = array("implement", "utilize", "integrate", "streamline", "optimize", "evolve", "transform", "embrace", 
"enable", "orchestrate", "leverage", "reinvent", "aggregate", "architect", "enhance", "incentivize", "morph", "empower", 
"envisioneer", "monetize", "harness", "facilitate", "seize", "disintermediate", "synergize", "strategize", "deploy", 
"brand", "grow", "target", "syndicate", "synthesize", "deliver", "mesh", "incubate", "engage", "maximize", "benchmark", 
"expedite", "reintermediate", "whiteboard", "visualize", "repurpose", "innovate", "scale", "unleash", "drive", "extend", 
"engineer", "revolutionize", "generate", "exploit", "transition", "e-enable", "iterate", "cultivate", "matrix", 
"productize", "redefine", 
"recontextualize");

$header_banner_verb_two = array("clicks-and-mortar", "value-added", "vertical", "proactive", "robust", "revolutionary", "scalable", 
"leading-edge", "innovative", "intuitive", "strategic", "e-business", "mission-critical", "sticky", "one-to-one", 
"24/7", "end-to-end", "global", "B2B", "B2C", "granular", "frictionless", "virtual", "viral", "dynamic", "24/365", 
"best-of-breed", "killer", "magnetic", "bleeding-edge", "web-enabled", "interactive", "dot-com", "sexy", "back-end", 
"real-time", "efficient", "front-end", "distributed", "seamless", "extensible", "turn-key", "world-class", 
"open-source", "cross-platform", "cross-media", "synergistic", "bricks-and-clicks", "out-of-the-box", "enterprise", 
"integrated", "impactful", "wireless", "transparent", "next-generation", "cutting-edge", "user-centric", "visionary", 
"customized", "ubiquitous", "plug-and-play", "collaborative", "compelling", "holistic", "rich");

$header_banner_noun = array("synergies", "web-readiness", "paradigms", "markets", "partnerships", "infrastructures", "platforms", 
"initiatives", "channels", "eyeballs", "communities", "ROI", "solutions", "e-tailers", "e-services", "action-items", 
"portals", "niches", "technologies", "content", "vortals", "supply-chains", "convergence", "relationships", 
"architectures", "interfaces", "e-markets", "e-commerce", "systems", "bandwidth", "infomediaries", "models", 
"mindshare", "deliverables", "users", "schemas", "networks", "applications", "metrics", "e-business", "functionalities", 
"experiences", "web services", "methodologies");

		echo $header_banner_verb_one[array_rand($header_banner_verb_one)] . ' ' . $header_banner_verb_two[array_rand($header_banner_verb_two)] . ' ' . 
		$header_banner_noun[array_rand($header_banner_noun)];

		
		}
	} // exists check

add_shortcode("makebullshit", "bg_make_bullshit");
?>
