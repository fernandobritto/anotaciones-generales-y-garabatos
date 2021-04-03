variable "region" {
  default = "#"
}

variable "vpc_cidr" {
  default = "192.168.0.0/17"
}

variable "public_a_cidr" {
  default = "192.168.1.0/25"
}

variable "public_b_cidr" {
  default = "192.168.2.0/25"
}

variable "private_a_cidr" {
  default = "192.168.6.0/27"
}

variable "private_b_cidr" {
  default = "192.168.4.0/27"
}

variable "ami" {
  default = "ami-007"
}

variable "instance_type" {
  default = "t2.micro"
}

variable "key_pair" {
  default = "infoenter"
}

variable "enabled_metrics" {
  description = "A list of metrics to collect. The allowed values are GroupMinSize, GroupMaxSize, GroupDesiredCapacity, GroupInServiceInstances, GroupPendingInstances, GroupStandbyInstances, GroupTerminatingInstances, GroupTotalInstances"
  type        = "list"

  default = [
    "GroupMinSize",
    "GroupMaxSize",
    "GroupDesiredCapacity",
    "GroupInServiceInstances",
    "GroupPendingInstances",
    "GroupStandbyInstances",
    "GroupTerminatingInstances",
    "GroupTotalInstances",
  ]
}
