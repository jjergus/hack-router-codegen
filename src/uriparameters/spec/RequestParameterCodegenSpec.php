<?hh // strict
/*
 *  Copyright (c) 2016, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the BSD-style license found in the
 *  LICENSE file in the root directory of this source tree. An additional grant
 *  of patent rights can be found in the PATENTS file in the same directory.
 *
 */

namespace Facebook\HackRouter;

abstract class RequestParameterCodegenSpec {
  const type TSpec = shape(
    'type' => string,
    'method' => string,
    'args' => ImmVector<UriParameterCodegenArgumentSpec>,
  );

  public abstract static function getGetterSpec(
    RequestParameter $param,
  ): self::TSpec;
}