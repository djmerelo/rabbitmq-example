# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
	config.vm.box = "rabbitmq"
	config.vm.box_url = "https://dl.dropboxusercontent.com/u/14231447/rabbit.box"

	config.ssh.username = "vagrant"
	config.ssh.password = "vagrant"
	config.ssh.insert_key = false

    config.vm.network "private_network", ip: "192.168.33.33"

end
