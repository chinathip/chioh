# This file is used by Rack-based servers to start the application.

=begin require ::File.expand_path('../config/environment',  __FILE__)
run Rails.application =end

require "./app"
run App
