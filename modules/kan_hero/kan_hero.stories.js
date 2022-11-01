import kanHeroTwig from './templates/paragraph--kan-hero.html.twig';
import kanHeroData from './data/kan_hero.yml';

export default {
  title: 'Kanponents/Hero',
};

export const Hero = kanHeroTwig(kanHeroData);