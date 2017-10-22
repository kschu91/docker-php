<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_25\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers   = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new PortNormalizer();
        $normalizers[] = new MountPointNormalizer();
        $normalizers[] = new DeviceMappingNormalizer();
        $normalizers[] = new ThrottleDeviceNormalizer();
        $normalizers[] = new MountNormalizer();
        $normalizers[] = new MountBindOptionsNormalizer();
        $normalizers[] = new MountVolumeOptionsNormalizer();
        $normalizers[] = new MountVolumeOptionsDriverConfigNormalizer();
        $normalizers[] = new MountTmpfsOptionsNormalizer();
        $normalizers[] = new RestartPolicyNormalizer();
        $normalizers[] = new ResourcesNormalizer();
        $normalizers[] = new ResourcesBlkioWeightDeviceItemNormalizer();
        $normalizers[] = new ResourcesUlimitsItemNormalizer();
        $normalizers[] = new HostConfigNormalizer();
        $normalizers[] = new HostConfigLogConfigNormalizer();
        $normalizers[] = new HostConfigPortBindingsItemNormalizer();
        $normalizers[] = new ConfigNormalizer();
        $normalizers[] = new ConfigHealthcheckNormalizer();
        $normalizers[] = new ConfigVolumesNormalizer();
        $normalizers[] = new NetworkConfigNormalizer();
        $normalizers[] = new GraphDriverNormalizer();
        $normalizers[] = new ImageNormalizer();
        $normalizers[] = new ImageRootFSNormalizer();
        $normalizers[] = new ImageSummaryNormalizer();
        $normalizers[] = new AuthConfigNormalizer();
        $normalizers[] = new ProcessConfigNormalizer();
        $normalizers[] = new VolumeNormalizer();
        $normalizers[] = new VolumeUsageDataNormalizer();
        $normalizers[] = new NetworkNormalizer();
        $normalizers[] = new IPAMNormalizer();
        $normalizers[] = new NetworkContainerNormalizer();
        $normalizers[] = new BuildInfoNormalizer();
        $normalizers[] = new CreateImageInfoNormalizer();
        $normalizers[] = new PushImageInfoNormalizer();
        $normalizers[] = new ErrorDetailNormalizer();
        $normalizers[] = new ProgressDetailNormalizer();
        $normalizers[] = new ErrorResponseNormalizer();
        $normalizers[] = new IdResponseNormalizer();
        $normalizers[] = new EndpointSettingsNormalizer();
        $normalizers[] = new EndpointSettingsIPAMConfigNormalizer();
        $normalizers[] = new PluginMountNormalizer();
        $normalizers[] = new PluginDeviceNormalizer();
        $normalizers[] = new PluginEnvNormalizer();
        $normalizers[] = new PluginInterfaceTypeNormalizer();
        $normalizers[] = new PluginNormalizer();
        $normalizers[] = new PluginSettingsNormalizer();
        $normalizers[] = new PluginConfigNormalizer();
        $normalizers[] = new PluginConfigInterfaceNormalizer();
        $normalizers[] = new PluginConfigUserNormalizer();
        $normalizers[] = new PluginConfigNetworkNormalizer();
        $normalizers[] = new PluginConfigLinuxNormalizer();
        $normalizers[] = new PluginConfigArgsNormalizer();
        $normalizers[] = new PluginConfigRootfsNormalizer();
        $normalizers[] = new NodeSpecNormalizer();
        $normalizers[] = new NodeNormalizer();
        $normalizers[] = new NodeVersionNormalizer();
        $normalizers[] = new NodeDescriptionNormalizer();
        $normalizers[] = new NodeDescriptionPlatformNormalizer();
        $normalizers[] = new NodeDescriptionResourcesNormalizer();
        $normalizers[] = new NodeDescriptionEngineNormalizer();
        $normalizers[] = new NodeDescriptionEnginePluginsItemNormalizer();
        $normalizers[] = new SwarmSpecNormalizer();
        $normalizers[] = new SwarmSpecOrchestrationNormalizer();
        $normalizers[] = new SwarmSpecRaftNormalizer();
        $normalizers[] = new SwarmSpecDispatcherNormalizer();
        $normalizers[] = new SwarmSpecCAConfigNormalizer();
        $normalizers[] = new SwarmSpecCAConfigExternalCAsItemNormalizer();
        $normalizers[] = new SwarmSpecEncryptionConfigNormalizer();
        $normalizers[] = new SwarmSpecTaskDefaultsNormalizer();
        $normalizers[] = new SwarmSpecTaskDefaultsLogDriverNormalizer();
        $normalizers[] = new ClusterInfoNormalizer();
        $normalizers[] = new ClusterInfoVersionNormalizer();
        $normalizers[] = new TaskSpecNormalizer();
        $normalizers[] = new TaskSpecContainerSpecNormalizer();
        $normalizers[] = new TaskSpecContainerSpecDNSConfigNormalizer();
        $normalizers[] = new TaskSpecResourcesNormalizer();
        $normalizers[] = new TaskSpecResourcesLimitsNormalizer();
        $normalizers[] = new TaskSpecResourcesReservationNormalizer();
        $normalizers[] = new TaskSpecRestartPolicyNormalizer();
        $normalizers[] = new TaskSpecPlacementNormalizer();
        $normalizers[] = new TaskSpecNetworksItemNormalizer();
        $normalizers[] = new TaskSpecLogDriverNormalizer();
        $normalizers[] = new TaskNormalizer();
        $normalizers[] = new TaskVersionNormalizer();
        $normalizers[] = new TaskStatusNormalizer();
        $normalizers[] = new TaskStatusContainerStatusNormalizer();
        $normalizers[] = new ServiceSpecNormalizer();
        $normalizers[] = new ServiceSpecModeNormalizer();
        $normalizers[] = new ServiceSpecModeReplicatedNormalizer();
        $normalizers[] = new ServiceSpecUpdateConfigNormalizer();
        $normalizers[] = new ServiceSpecNetworksItemNormalizer();
        $normalizers[] = new EndpointPortConfigNormalizer();
        $normalizers[] = new EndpointSpecNormalizer();
        $normalizers[] = new ServiceNormalizer();
        $normalizers[] = new ServiceVersionNormalizer();
        $normalizers[] = new ServiceEndpointNormalizer();
        $normalizers[] = new ServiceEndpointVirtualIPsItemNormalizer();
        $normalizers[] = new ServiceUpdateStatusNormalizer();
        $normalizers[] = new ImageDeleteResponseNormalizer();
        $normalizers[] = new ServiceUpdateResponseNormalizer();
        $normalizers[] = new ContainerSummaryItemNormalizer();
        $normalizers[] = new ContainerSummaryItemHostConfigNormalizer();
        $normalizers[] = new ContainerSummaryItemNetworkSettingsNormalizer();
        $normalizers[] = new SecretSpecNormalizer();
        $normalizers[] = new SecretNormalizer();
        $normalizers[] = new SecretVersionNormalizer();
        $normalizers[] = new ContainersCreatePostBodyNormalizer();
        $normalizers[] = new ContainersCreatePostBodyNetworkingConfigNormalizer();
        $normalizers[] = new ContainersCreatePostResponse201Normalizer();
        $normalizers[] = new ContainersIdJsonGetResponse200Normalizer();
        $normalizers[] = new ContainersIdJsonGetResponse200StateNormalizer();
        $normalizers[] = new ContainersIdTopGetResponse200Normalizer();
        $normalizers[] = new ContainersIdChangesGetResponse200ItemNormalizer();
        $normalizers[] = new ContainersIdUpdatePostBodyNormalizer();
        $normalizers[] = new ContainersIdUpdatePostResponse200Normalizer();
        $normalizers[] = new ContainersIdWaitPostResponse200Normalizer();
        $normalizers[] = new ContainersIdArchiveGetResponse400Normalizer();
        $normalizers[] = new ContainersIdArchiveHeadResponse400Normalizer();
        $normalizers[] = new ContainersPrunePostResponse200Normalizer();
        $normalizers[] = new ImagesNameHistoryGetResponse200ItemNormalizer();
        $normalizers[] = new ImagesSearchGetResponse200ItemNormalizer();
        $normalizers[] = new ImagesPrunePostResponse200Normalizer();
        $normalizers[] = new AuthPostResponse200Normalizer();
        $normalizers[] = new InfoGetResponse200Normalizer();
        $normalizers[] = new InfoGetResponse200PluginsNormalizer();
        $normalizers[] = new InfoGetResponse200RegistryConfigNormalizer();
        $normalizers[] = new InfoGetResponse200RegistryConfigIndexConfigsItemNormalizer();
        $normalizers[] = new VersionGetResponse200Normalizer();
        $normalizers[] = new EventsGetResponse200Normalizer();
        $normalizers[] = new EventsGetResponse200ActorNormalizer();
        $normalizers[] = new SystemDfGetResponse200Normalizer();
        $normalizers[] = new ContainersIdExecPostBodyNormalizer();
        $normalizers[] = new ExecIdStartPostBodyNormalizer();
        $normalizers[] = new ExecIdJsonGetResponse200Normalizer();
        $normalizers[] = new VolumesGetResponse200Normalizer();
        $normalizers[] = new VolumesCreatePostBodyNormalizer();
        $normalizers[] = new VolumesPrunePostResponse200Normalizer();
        $normalizers[] = new NetworksCreatePostBodyNormalizer();
        $normalizers[] = new NetworksCreatePostResponse201Normalizer();
        $normalizers[] = new NetworksIdConnectPostBodyNormalizer();
        $normalizers[] = new NetworksIdDisconnectPostBodyNormalizer();
        $normalizers[] = new NetworksPrunePostResponse200Normalizer();
        $normalizers[] = new PluginsPrivilegesGetResponse200ItemNormalizer();
        $normalizers[] = new PluginsPullPostBodyItemNormalizer();
        $normalizers[] = new SwarmGetResponse200Normalizer();
        $normalizers[] = new SwarmGetResponse200JoinTokensNormalizer();
        $normalizers[] = new SwarmInitPostBodyNormalizer();
        $normalizers[] = new SwarmJoinPostBodyNormalizer();
        $normalizers[] = new SwarmUnlockkeyGetResponse200Normalizer();
        $normalizers[] = new SwarmUnlockPostBodyNormalizer();
        $normalizers[] = new ServicesCreatePostBodyNormalizer();
        $normalizers[] = new ServicesCreatePostResponse201Normalizer();
        $normalizers[] = new ServicesIdUpdatePostBodyNormalizer();
        $normalizers[] = new SecretsCreatePostBodyNormalizer();
        $normalizers[] = new SecretsCreatePostResponse201Normalizer();

        return $normalizers;
    }
}
