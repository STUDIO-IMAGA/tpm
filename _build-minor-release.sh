#!/bin/bash

echo "Producing a Minor version";

gulp

gulp --production=minor || exit 1

gulp
