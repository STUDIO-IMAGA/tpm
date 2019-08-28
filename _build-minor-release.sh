#!/bin/bash

echo "Producing a Minor version";

gulp --production=minor || exit 1
