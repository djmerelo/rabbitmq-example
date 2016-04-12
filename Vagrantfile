# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
	config.vm.box = "rabbitmq"
	config.vm.box_url = "https://cloud-images.ubuntu.com/vagrant/precise/current/precise-server-cloudimg-amd64-vagrant-disk1.box"

    config.vm.network "private_network", ip: "192.168.33.33"

    config.vm.provision "shell",
        inline: "apt-get update && apt-get install -y rabbitmq-server && apt-get install -y php5-cli && /usr/lib/rabbitmq/bin/rabbitmq-plugins enable rabbitmq_management && rabbitmq-server restart"

end
